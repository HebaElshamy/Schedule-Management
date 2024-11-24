var app = angular.module('scheduleApp', []);

app.controller('MainController', ['$scope', '$http', function($scope, $http) {
    $scope.teachers = [];
    $scope.timeSlots = [];
    $scope.schedule = [];


    $scope.loadData = function() {
        $http.get('http://localhost:8000/api/teachers').then(function(response) {
            console.log(response.data)
            $scope.teachers = response.data;
        });

        $http.get('http://localhost:8000/api/time-slots').then(function(response) {
            $scope.timeSlots = response.data;
        });

        $http.get('http://localhost:8000/api/schedules').then(function(response) {
            $scope.schedule = response.data.map(function(entry) {
                return {
                    id: entry.id,
                    teacher: entry.teacher.name,
                    teacher_id: entry.teacher.id,
                    subject: entry.subject.name,
                    subject_id: entry.subject.id,
                    day: entry.day,
                    timeSlotId: entry.time_slot.id
                };

            });
        });
    };


    $scope.loadData();


    $scope.saveSchedule = function() {
        const newSchedule = [];


        const cells = document.querySelectorAll('.schedule-cell');

        cells.forEach(cell => {
            const day = cell.id.split('-')[0];
            const timeSlotId = cell.id.split('-')[1];
            const assignedTeachers = cell.querySelectorAll('.draggable');

            assignedTeachers.forEach(teacherDiv => {
                const teacherId = teacherDiv.id.replace('drag', '');
                const teacher = $scope.teachers.find(t => t.id == teacherId);

                if (teacher) {
                    newSchedule.push({
                        teacher_id: teacher.id,
                        subject_id: teacher.subject_id, 
                        day: day,
                        time_slot_id: timeSlotId
                    });
                }
            });
        });


        $http.post('http://localhost:8000/api/schedules/bulk', { schedules: newSchedule }).then(function(response) {
            alert('Schedule saved successfully!');
        });
    };

    $scope.removeSchedule = function(entry) {

        const index = $scope.schedule.indexOf(entry);
        if (index > -1) {
            $scope.schedule.splice(index, 1);
        }


        const dataToDelete = {
            teacher_id: entry.teacher_id,
            day: entry.day,
            time_slot_id: entry.timeSlotId
        };


        $http.post('http://localhost:8000/api/schedules/remove', dataToDelete)
            .then(function(response) {
                console.log('Schedule removed successfully');
            })
            .catch(function(error) {
                console.error('Error removing schedule:', error);
            });
    };





}]);


function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}



function drop(ev) {
    ev.preventDefault();


    var draggedElementId = ev.dataTransfer.getData("text");
    var draggedElement = document.getElementById(draggedElementId);


    var clone = draggedElement.cloneNode(true);
    clone.setAttribute("draggable", false);


    ev.target.appendChild(clone);
}

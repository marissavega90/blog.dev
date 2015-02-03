
var classroom = [
'Nicole',
'Calvin',
'Felice',
'David',
'Kevin',
'Michael',
'Stephanie (Beyonce)',
'Paul',
'Chris',
'Jeff',
'Marissa',
'Travis'
];

console.log('My classroom is epic and the students are: ')

console.log('=======================================')

classroom.forEach(function (student, index, array) {

    if (index == [10]) {
        console.log('This is me: ' + student)
    } else if (index == [11]) {
        console.log('This is my neighbor: ' + student) 
    } else {
        console.log(student);
    }

});

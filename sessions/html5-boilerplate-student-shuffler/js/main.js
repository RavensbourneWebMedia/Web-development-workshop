function studentTemplate(student)
{
	var html = '<li>'
	html += '<img src="http://learn.rave.ac.uk/moodle/pluginfile.php/' + student.imageId + '/user/icon/ravebootstrap/f3">'
	html += '<h3 contenteditable>' + student.name + '</h3>'
	html += '<a class="button remove">Not here?</a>'
	html += '</li>'
	return html
}

function listStudents(students)
{
	var randomStudents = $.extend(true, [], students).shuffle(), // clone the students array and then shuffle it
		$ul = $('ul#students')

	randomStudents.forEach(function(student)
	{
		var li = studentTemplate(student)
		$ul.append(li)
	})
}
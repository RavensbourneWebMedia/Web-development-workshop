// from http://stackoverflow.com/a/24137301/4647178
Array.prototype.getRandomElement = function () 
{
	return this[Math.floor((Math.random()*this.length))]
}

// from http://stackoverflow.com/questions/2450954/how-to-randomize-shuffle-a-javascript-array 
Array.prototype.shuffle = function () 
{
	var currentIndex = this.length, 
		temporaryValue, 
		randomIndex

	// While there remain elements to shuffle...
	while (0 !== currentIndex) 
	{

		// Pick a remaining element...
		randomIndex = Math.floor(Math.random() * currentIndex)
		currentIndex -= 1

		// And swap it with the current element.
		temporaryValue = this[currentIndex]
		this[currentIndex] = this[randomIndex]
		this[randomIndex] = temporaryValue
	}

	return this
}

function studentTemplate(student)
{
	var html = '<li>'
	html += '<img src="http://learn.rave.ac.uk/moodle/pluginfile.php/' + student.imageId + '/user/icon/ravebootstrap/f3">'
	html += '<h3>' + student.name + '</h3>'
	// html += '<p>A short blurb about this person. Or is it a product?</p>'
	// html += '<a class="button">Get in touch</a>'
	html += '</li>'
	return html
}

function listStudents()
{
	var randomStudents = $.extend(true, [], students).shuffle(), // clone the students array and then shuffle it
		$ul = $('ul#students')

	randomStudents.forEach(function(student)
	{
		var li = studentTemplate(student)
		$ul.append(li)
	})
}

var students = 
[
	{
		name: 'Kieran Bailey',
		imageId: '106430'
	},
	{
		name: 'Ryder Barnes',
		imageId: '106445'
	},
	{
		name: 'Harry Difolco',
		imageId: '106450'
	},
	{
		name: 'Joe Dunkerley',
		imageId: '106454'
	},
	{
		name: 'Alexander Farmery',
		imageId: '106448'
	},
	{
		name: 'Jonny Gwillim',
		imageId: '106383'
	},
	{
		name: 'Luke Henry',
		imageId: '106534'
	},
	{
		name: 'Isaac Houghton',
		imageId: '106451'
	},
	{
		name: 'Juliette Jupp',
		imageId: '106434'
	},
	{
		name: 'Rana Karim',
		imageId: '106435'
	},
	{
		name: 'Jack Kemmish',
		imageId: '106427'
	},
	{
		name: 'Aidan Mcvay',
		imageId: '106436'
	},
	{
		name: 'Ollie Norris',
		imageId: '106437'
	},
	{
		name: 'Sanj Pardesi',
		imageId: '106439'
	},
	{
		name: 'Tom Sharman',
		imageId: '106443'
	},
	{
		name: 'Johan Wilhelmsson',
		imageId: '106447'
	},
	{
		name: 'Harry Wills',
		imageId: '106449'
	}
]
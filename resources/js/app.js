
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function() {

    if ($('#gender').length > 0)
    {
        $('#filtra').click(function() {
            var genderValue = $('#gender').val();

            $.ajax({
                url: 'http://localhost:8000/api/students/filter',
                method: 'GET',
                data: {
                    gender: ''
                },
                success: function(data)
                {
                    if (data.error.length > 0)
                    {
                        console.log(data.error);
                    }
                },
                error: function()
                {
                    console.log('Ciaoooooo');
                }
            });
        });
    }

});

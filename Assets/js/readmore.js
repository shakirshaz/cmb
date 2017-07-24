$(function(){ /* to make sure the script runs after page load */

    $('.itemNews').each(function(event){ /* select all divs with the item class */

        var max_length = 250; /* set the max content length before a read more link will be added */0

        if($(this).text().length > max_length){ /* check for content length */
            var length = $(this).text().length;
            var short_content 	= $(this).html().substr(0,max_length); /* split the content in two parts */
            var long_content	= $(this).html().substr(max_length,length);

            $(this).html(short_content+' <span class="dots"><b><smal>  continued ...</smal></b></span> '+
                '<a href="#" class="read_more"><br/>Read More</a>'+
                '<span class="more_text" style="display:none;">'+long_content+'</span>'+'<a href="#" style="display: none;" class="show_less"><br/>Read Less</a>'); /* Alter the html to allow the read more functionality */

            $(this).find('a.read_more').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it */

                event.preventDefault(); /* prevent the a from changing the url */
                $(this).hide(); /* hide the read more button */
                $(this).parents('.itemNews').find('.show_less').show();
                $(this).parents('.itemNews').find('.dots').hide();
                $(this).parents('.itemNews').find('.more_text').show(); /* show the .more_text span */

            });

            $(this).find('a.show_less').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it */

                event.preventDefault(); /* prevent the a from changing the url */
                $(this).hide(); /* hide the read more button */
                $(this).parents('.itemNews').find('.read_more').show();
                $(this).parents('.itemNews').find('.dots').show();
                $(this).parents('.itemNews').find('.more_text').hide(); /* show the .more_text span */

            });

        }

    });


});
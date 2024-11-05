$(document).ready(function() {
    $('.popup-gallery').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image', // this is important
        gallery: {
            enabled: true // enable gallery mode
        },
        image: {
            titleSrc: function(item) {
                return item.el.attr('title'); // get title from the link's title attribute
            }
        }
    });

        // Initial check on page load
        checkSelectedOption();

        // Add change event listener to the dropdown
        $('#bookingFor').change(function() {

            checkSelectedOption();
        });

        // Function to check the selected option and show/hide text accordingly
        function checkSelectedOption() {
            var selectedOption = $('#bookingFor').val();
            console.log(selectedOption);
            if (selectedOption === 'Lawn for Marriage') {
                $('#lawnDetails').removeClass('hidden');
                $('#lawnRelation').removeClass('hidden');
                $('#lawnDD').removeClass('hidden');

                $('#nonLawnDD').addClass('hidden');
                $('#nonLawnDD').prop('disabled', true);

                $('#domDD').addClass('hidden');
                $('#domDD').prop('disabled', true);

                $('#lawnDetails2').addClass('hidden');
                $('#lawnDD2').addClass('hidden');
                $('#lawnDD2').prop('disabled', true);

                $('#no_of_rooms').addClass('hidden');

                $('#roof-top-details').addClass('hidden');

            }
            else if (selectedOption === 'Lawn for Birthday'){
                $('#lawnRelation').removeClass('hidden');
                $('#lawnDetails').addClass('hidden');
                $('#lawnDetails2').removeClass('hidden');

                $('#lawnDD').addClass('hidden');
                $('#lawnDD2').removeClass('hidden');

                $('#domDD').addClass('hidden');
                $('#domDD').prop('disabled', true);

                $('#nonLawnDD').addClass('hidden');
                $('#nonLawnDD2').addClass('hidden');
                $('#lawnDD2').prop('disabled', true);

                $('#no_of_rooms').addClass('hidden');

                $('#roof-top-details').addClass('hidden');
            }

            else if (selectedOption === 'roof top'){
                $('#roof-top-details').addClass('show');
                $('#roof-top-details').removeClass('hidden');

                $('#lawnDetails').addClass('hidden');

                $('#lawnDD').removeClass('show');
                $('#lawnDD').addClass('hidden');

                $('#lawnDD2').removeClass('show');
                $('#lawnDD2').prop('disabled', false);

                $('#nonLawnDD2').removeClass('show');
                $('#nonLawnDD2').addClass('hidden');

                $('#nonLawnDD').removeClass('show');
                $('#nonLawnDD').addClass('hidden');


                $('#no_of_rooms').addClass('hidden');

                $('#domDD').removeClass('hidden');
                $('#domDD').addClass('show');


            }

            else if (selectedOption === 'Room'){
                $('#lawnRelation').addClass('hidden');
                $('#domDD').addClass('hidden');
                $('#no_of_rooms').removeClass('hidden');
                $('#no_of_rooms').addClass('show');
                $('#roof-top-details').addClass('hidden');

                $('#lawnDD').addClass('hidden');

                $('#nonLawnDD').removeClass('hidden');
                $('#nonLawnDD').addClass('show');

            }

            else if (selectedOption === 'Hall' || selectedOption === 'Anandam hall' || selectedOption === 'Dome'){
                $('#lawnDetails').addClass('hidden');
                $('#lawnDetails2').addClass('hidden');
                $('#lawnRelation').addClass('hidden');
                $('#lawnRelation2').addClass('hidden');
                $('#lawnDD').addClass('hidden');
                $('#lawnDD').prop('disabled', true);
                $('#lawnDD2').addClass('hidden');
                $('#lawnDD2').prop('disabled', true);
                $('#domDD').removeClass('hidden');
                $('#domDD').addClass('show');
                $('#nonLawnDD').prop('disabled', false);
                $('#roof-top-details').addClass('hidden');
                $('#nonLawnDD').removeClass('show');
                $('#nonLawnDD').addClass('hidden');
            }

            else {
                $('#lawnDetails').addClass('hidden');
                $('#lawnDetails2').addClass('hidden');
                $('#lawnRelation').addClass('hidden');
                $('#lawnRelation2').addClass('hidden');
                $('#lawnDD').addClass('hidden');
                $('#lawnDD').prop('disabled', true);
                $('#lawnDD2').addClass('hidden');
                $('#lawnDD2').prop('disabled', true);
                $('#nonLawnDD').removeClass('hidden');
                $('#nonLawnDD').prop('disabled', false);
                $('#roof-top-details').addClass('hidden');
                // $('#no_of_rooms').addClass('hidden');
                // $('#no_of_rooms').addClass('show');
            }

        }
});

function toggleBillDetails() {
    var x = document.getElementById("bill_details");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
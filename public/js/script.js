// function saveCheckboxState() {
//     let checkboxes = document.querySelectorAll("input[type='checkbox']");
//     checkboxes.forEach(element => {
//         localStorage.setItem(element.id, element.checked);
//     });
// }

// function loadCheckboxState() {
//     let checkboxes = document.querySelectorAll("input[type='checkbox']");
//     checkboxes.forEach(element => {
//         element.checked = localStorage.getItem(element.id) === 'true';
//     });
// }

// document.addEventListener('DOMContentLoaded', loadCheckboxState);

// document.querySelectorAll("input[type='checkbox']").forEach(element => {
//     element.addEventListener("change", saveCheckboxState);
// });



src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"

    $(document).ready(function() {
        $('.checked').change(function() {
            if(this.checked) {
                var objectId = $(this).data('id');
                
                // Make an AJAX request to trigger the store function
                $.ajax({
                    url: '/checked', // Replace with your actual route
                    method: 'POST', // Assuming you're creating a new resource
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'korean': objectId.korean.value, // Replace with actual data if needed
                        'nepali': objectId.korean.value, // Replace with actual data if needed
                        // Add more data as needed
                    },
                    
                });
            }
        });
    });

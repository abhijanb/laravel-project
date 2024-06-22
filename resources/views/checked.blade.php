<table>
    <thead>
        <tr>
            <th>Korean</th>
            <th>Nepali</th>
            <th>View Images</th>
            <th>Check</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($objects as $key => $value)
        <tr>
            <td>{{ $key }}</td>
            <td>{{ $value }}</td>
            <td><a href="https://www.google.com/search?q={{ urlencode($key) }}+{{ urlencode($value) }}&tbm=isch" target="_blank">View Images</a></td>
            <td><input type="checkbox" id="{{ $key }}"></td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to run on page load
        function run() {
            // Iterate through all checkboxes and set their checked status
            document.querySelectorAll("input[type='checkbox']").forEach(function(checkbox) {
                // Retrieve checkbox state from localStorage
                var isChecked = localStorage.getItem(checkbox.id) === 'true';
                checkbox.checked = isChecked;
                
                // Hide corresponding <td> based on checkbox state
                if (isChecked) {
                    var tr = checkbox.closest('tr');
                    tr.querySelectorAll('td').forEach(function(td) {
                        td.style.display = 'none';
                    });
                }
            });
        }
        
        // Call the run function to initialize checkbox states
        run();
        
        // Add event listener for checkbox change
        document.querySelectorAll("input[type='checkbox']").forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                var isChecked = this.checked;
                localStorage.setItem(this.id, isChecked);
                
                // Hide/show corresponding <td> based on checkbox state
                var tr = this.closest('tr');
                tr.querySelectorAll('td').forEach(function(td) {
                    td.style.display = isChecked ? 'none' : ''; // Toggle display
                });
            });
        });
    });
</script>

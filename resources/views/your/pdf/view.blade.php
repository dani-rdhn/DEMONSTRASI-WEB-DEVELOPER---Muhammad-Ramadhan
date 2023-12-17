<!-- resources/views/your/pdf/view.blade.php -->
<table class="table mb-0">
    <thead class="small text-uppercase bg-body">
        <!-- ... your table headers ... -->
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr class="align-middle">
                <!-- ... your table cells ... -->
            </tr>
        @endforeach
    </tbody>
</table>

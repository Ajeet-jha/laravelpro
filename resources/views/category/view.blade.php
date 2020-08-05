<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <title>Category</title>
    </head>
    <body>
        <div class="container">
            <h2>Table Head Colors</h2>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <a href="{{ route('add_category') }}">Add new</a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($category as $value)
                    <tr>
                        <td>{{ $value->category_id}}</td>
                        <td>{{ $value->category_name }}</td>
                        <td>{{ $value->status }}</td>
                        <td>
                       
                        <a href="{{ route('edit_category', $value->category_id)  }}" >Edit</a>
                        <a href="{{ route('delete_category', $value->category_id) }}" >Delete</a>
                        </td>
                    </tr>
                @endforeach
                   
                </tbody>
            </table>
        </div>
    </body>
</html>

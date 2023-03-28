<html>

<head>
    <title>Cool Blog Page</title>
</head>

<body>
    <h1>Welcome to our blog page</h1>

    <h2>Read more about the posts:</h2>
    <p><a href="{{ url('/') }}">Return Home</a></p>

    <!-- Style the table -->
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>

    <!-- Table to display the search result-->
    <table>
        <th align="left">Title</th>
        <th align="left">Date Created</th>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->created}}</td>
        </tr>
        <tr>
            <td colspan="2">{{$post->content}}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>
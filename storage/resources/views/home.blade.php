<html>

<head>
    <title>Homepage of Cool blog posts</title>
</head>

<body>
    <h1>Available blog posts:</h1>

    <h2>Blog posts:</h2>

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
        <th align="left">Date Created</th>
        <th align="left">Title</th>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->created}}</td>
            <td><a href="{{ url('/blog/'.$post->id) }}">{{$post->title}}</a></td>
        </tr>
        @endforeach
    </table>

</body>

</html>
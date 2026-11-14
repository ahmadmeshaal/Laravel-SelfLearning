<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Users</title>
    @if (session('error'))
    <p>{{ session('error') }}</p>
    @endif
</head>

<body>
    <h1>Users</h1>
    <a href="{{ route('users.create') }}">Add User</a>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.edit', $user) }}">Edit</a>
                    <a href="{{ route('users.show', $user) }}">View</a>
                    <form action="{{ route('users.destroy', $user) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="2">No users found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
    </tr>
    <tr>
        <th colspan="3" style="text-align: center; font-weight: bold">Span 3</th>
    </tr>
    <tr>
        <th></th>
        <th></th>
        <th>Test</th>
    </tr>
    </thead>
    <tbody>
    @foreach($groups as $index => $group)
    <tr>
        <td colspan="3" style="text-align: center; font-weight: bold">Group {{ $index + 1 }}</td>
    </tr>
        @foreach($group as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('Y-m-d') }}</td>
            </tr>
        @endforeach
    @endforeach
    </tbody>
</table>

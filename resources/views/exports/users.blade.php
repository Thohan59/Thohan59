<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Shirt</th>
        <th>Pant</th>
        <th>Cap</th>
        <th>Belt</th>
        <th>State</th>
        <th>Vibhag</th>
        <th>Zilla</th>
        <th>City</th>
        <th>Revenue Mandal</th>
        <th>Mandal</th>
        <th>Panchayathi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td> {{ $user->name }} </td>
            <td> {{ $user->phone }} </td>
            <td> {{ $user->uniform->shirt_size ?? 'Na' }} </td>
            <td> {{ $user->uniform->pant_size ?? 'Na' }} </td>
            <td> {{ $user->uniform->cap ?? 'Na' }} </td>
            <td> {{ $user->uniform->belt ?? 'Na' }} </td>
            <td> {{ $user->address->state->Name ?? 'Na' }}</td>
            <td> {{ $user->address->vibhag->Name ?? 'Na' }}</td>
            <td> {{ $user->address->zilla->Name ?? 'Na' }}</td>
            <td> {{ $user->address->city->Name ?? 'Na' }}</td>
            <td> {{ $user->address->revenue_mandal->Name ?? 'Na' }}</td>
            <td> {{ $user->address->mandal->Name ?? 'Na' }}</td>
            <td> {{ $user->address->panchayathi->Name ?? 'Na' }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
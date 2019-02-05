<tr>
    <th scope="row">1</th>
    <td>{{ $user->name }}</td>
    <td>{{ $user->phone }}</td>
    <td>{{ $user->email }}</td>
    <td style="text-align: center;">
@include('admin.user.operations',$user)
    </td>
</tr>
<tr>
    <th scope="row">1</th>
    <td>{{ $package->name }}</td>
    <td>{{ $package->services()->get()->count() }}</td>
    <td style="text-align: center;">
@include('admin.package.operations',$package)
    </td>
</tr>
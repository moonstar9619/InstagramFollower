<tr>
    <th scope="row">1</th>
    <td>{{ $service->name }}</td>
    <td>{{ $service->service_price }}</td>
    <td>{{ $service->package->name }}</td>
    <td style="text-align: center;">
        @include('admin.service.operations',$service)
    </td>
</tr>
<tr>
    <th scope="row">1</th>
    <td>{{ $userPhone }}</td>
    {{--  in ro az inja nabayad bgire az order bayad bgire --}}
    <td>{{ $userOrder->link }}</td>
    @if(isset($userPaymentInfo) && count($userPaymentInfo)>0)
        <td>{{ $userPaymentInfo->service_id }}</td>
        <td>{{ $userPaymentInfo->ref_num }}</td>
        <td>{{ $userPaymentInfo->res_num }}</td>
        {{--        <td>{{ $userPaymentInfo-> }}</td>--}}
        <td>{{ $userPaymentInfo->created_at }}</td>
        <td>
            <span class="pb-2 badge badge-{{ $userPaymentInfo->status == 1 ? 'danger' : 'success' }}">
            {{ $userPaymentInfo->status == 1? 'ناقص': ' موفق' }}
        </span>
        </td>
    @else
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <span class="badge badge-danger pb-2">ناقص</span>
        </td>
    @endif
    {{--<td>1000000</td>--}}

</tr>
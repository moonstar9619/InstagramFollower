<tr>
    <th scope="row">1</th>
    <td>{{ $transaction->ref_num }}</td>
    <td>{{ $transaction->res_num }}</td>
    <td>{{ $transaction->payment_price }}</td>
    <td><span class="pb-2 badge badge-{{ $transaction->status == 1 ? 'success' : 'danger' }}">
            {{ $transaction->status == 1? 'موفق': 'نا موفق' }}
        </span></td>
    <td>{{ $transaction->created_at }}</td>
    <td>
        @include('admin.transaction.operations')
    </td>
</tr>
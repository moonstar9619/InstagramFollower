<a href="{{ route('admin.transactions.delete',$transaction->payment_id) }}">حذف</a>
@if($transaction->status == 1)
    <a class="pb-2 badge badge-danger" href="#">لغو</a>
    @else
    <a class="pb-2 badge badge-info" href="#">تایید</a>
@endif

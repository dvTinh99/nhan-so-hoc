@include('layouts.header')
<div class="" style="margin: 120px 0px;align-items: center;">
    <div class="history-title mt-10">
        <h3 class="title font2 text-center">Danh sách tài khoản</h3>
    </div>

    <div class="row justify-content-center my-5">
        <div class="col-12 col-md-12">
            <div class="tbl-history" style="overflow: scroll;">
                <table class=" table table-borderless text-center">
                    <thead class="table-light">
                        <tr>
                            <td><strong>#</strong></td>
                            <td><strong>Tên</strong></td>
                            <td><strong>Email</strong></td>
                            <td><strong>Số điện thoại</strong></td>
                            <td><strong>Lượt tra cứu</strong></td>
                            <td><strong>Số lượt còn </strong></td>
                            <td><strong>Xóa</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr>
                                <td> {{ ++$key }}</td>
                                <td>{{ $user->name ?? '-' }}</td>
                                <td>{{ $user->email ?? '-'}}</td>
                                <td>{{ $user->phone ?? '-'}}</td>
                                <td>{{ $user->turn_used }}</td>
                                <td><span class="text-danger"> {{ $user->turn_remaining }}</span></td>
                                <td>
                                    <a href="{{ route('user.delete', ['id'=> $user->id]) }}">
                                        <svg style="width: 20px;color: red;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

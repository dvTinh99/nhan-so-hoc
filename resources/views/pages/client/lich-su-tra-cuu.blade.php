@include('layouts.header')
<div style="margin: 120px 0px;align-items: center;">
    <div class="history-title mt-10">
        <h3 class="title font2 text-center">Lịch sử tra cứu</h3>
    </div>

    <div class="row justify-content-center my-5">
        <div class="col-12 col-md-12">
            <div class="tbl-history" style="overflow: scroll;">
                <table class="table table-borderless text-center">
                    <thead class="table-light">
                        <tr>
                            <td><strong>#</strong></td>
                            <td><strong>Tên</strong></td>
                            <td><strong>Ngày sinh</strong></td>
                            <td><strong>Ngày tra cứu</strong></td>
                            <td><strong>Xem báo cáo</strong></td>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($seeks as $key => $seek)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $seek->name }}</td>
                                <td>{{ $seek->birthday }}</td>
                                <td>{{ $seek->created_at }}</td>
                                <td>
                                    <a href="tracuu.html">Tra cứu</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

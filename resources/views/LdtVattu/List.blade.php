<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>danh sach nha vat tu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <h1>danh sach nha vat tu</h1>
    </header>
    <section class="container my-1 border p-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ma vat tu</th>
                    <th>ten vat tu</th>
                    <th>don vi tinh</th>
                    <th>phan tram</th>
                    <th>chuc nang</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($ldtVattus as $item)
                    <tr>
                        <td>{{$loop->iteration + ($ldtVattus->currentPage()-1) = $ldtVattus->perPage() }}</td>
                        <td>{{$item->ldtMaVTu}}</td>
                        <td>{{$item->ldtTenVTu}}</td>
                        <td>{{$item->ldtDvTinh}}</td>
                        <td>{{$item->ldtPhanTram}}</td>
                        <td>
                            <a href="/ldtVattus/detail/{{$item->ldtMaVTu}}" class="btn btn-success">
                                chi tiết
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="/ldtVattus/edit/{{$item->ldtMaVTu}}" class="btn btn-primary">
                                sửa
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="/ldtVattus/delete/{{$item->ldtMaVTu}}" class="btn btn-danger">
                                delete</a>
                            <a href="/ldtVattus/delete/{{$item->ldtMaVTu}}" class="btn btn-danger"
                                onclick=" return confirm('ban co chac chan xoa khoa nay khong?')"
                                >
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">chua co du lieu</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <button class="btn btn-primary">them moi</button>
    </section>
</body>
</html>
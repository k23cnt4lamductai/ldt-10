<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>danh sach nha cung cap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <h1>danh sach nha cung cap</h1>
    </header>
    <section class="container my-1 border p-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ma nha cung cap</th>
                    <th>ten nha cung cap</th>
                    <th>dia chi</th>
                    <th>email</th>
                    <th>dien thoai</th>
                    <th>chuc nang</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($ldtNhaCCs as $item)
                    <tr>
                        <td>1</td>
                        <td>{{$item->ldtMaNCC}}</td>
                        <td>{{$item->ldtTenNCC}}</td>
                        <td>{{$item->ldtDiaChi}}</td>
                        <td>{{$item->ldtemail}}</td>
                        <td>{{$item->ldtDienThoai}}</td>
                        <td>
                            <a href="/ldtNhaCCs/detail/{{$item->ldtMaNCC}}" class="btn btn-success">
                                chi tiết
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="/ldtNhaCCs/edit/{{$item->ldtMaNCC}}" class="btn btn-primary">
                                sửa
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="/ldtNhaCCs/delete/{{$item->ldtMaNCC}}" class="btn btn-danger">
                                delete</a>
                            <a href="/ldtNhaCCs/delete/{{$item->ldtMaNCC}}" class="btn btn-danger"
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
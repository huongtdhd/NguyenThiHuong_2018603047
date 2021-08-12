@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center text-lg">{{ __('DANH ĐÃ ĐĂNG KÝ') }}</div>

                <table class="table">
                  <th>STT</td>
                  <th>Họ tên</td>
                  <th>Tên môn</td>
                  <tbody>
                    @foreach ($list as $item)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td> 
                                {{ $item->name }}
                            </td>
                            <td> 
                                {{ $item->tenmonhoc }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layout.main')

@section('container')
<h1>TRANSAKSI</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ID Barang</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Harga</th>
        <th scope="col">Expired</th>
        <th scope="col">Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>SK001</td>
        <td>Sikat Gigi</td>
        <td>Rp. 20.000</td>
        <td>20-Juni-2022</td>
        <td>1</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>SB001</td>
        <td>Sabun</td>
        <td>Rp. 45.000</td>
        <td>26-Oktober-2022</td>
        <td>2</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>DT001</td>
        <td>Detergen Jet</td>
        <td>Rp. 60.000</td>
        <td>25-November-2022</td>
        <td>10</td>
      </tr>
    </tbody>
  </table>
  @endsection
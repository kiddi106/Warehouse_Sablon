@extends('dashboard.layouts.main')

@section('container')
<style>
  .cardBox
{
    position: relative;
    width: 100%;
    padding: 20px;
    display: grid;
    grid-template-columns: repeat(4,1fr);
    grid-gap: 30px;
}
.cardBox .card
{
    position: relative;
    background: white;
    padding: 30px;
    border-radius: 20px;
    display: flex;
    flex-direction: row-reverse;
    justify-content: center;
    text-align: center;
    cursor: pointer;
    box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
}
.cardBox .card .numbers
{
    align-items: center
    font-weight: 500;
    font-size: 2.5em;
    color: grey;
}
.cardBox .card .cardName
{ 
    text-align: center;
    color: darkgray;
    font-size: 1.1em;
    margin-top: 5px;
}
.cardBox .card .iconBx
{
    font-size: 3.5em;
    color: grey;
}
.cardBox .card:hover
{
    background: grey;
}
.cardBox .card:hover .numbers ,
.cardBox .card:hover .numbers,
.cardBox .card:hover .iconBx
{
    color: white;
}

.details .cardHeader
{
    width: 100%;
    height: 50px;

}
.details table
{
    width: 100%;
    border-collapse: collapse;
    margin-top: -100px
}
.details table thead td
{
    font-weight: 600;
}
.details .recentOrders table tr
{
    color:darkgray ;
    border-bottom: 1px solid rgba(0, 0, 0, 0.08);
}
.details .recentOrders table tr:last-child
{
    border-bottom: none;
}

.details .recentOrders table tbody tr:hover
{
    background: grey;
    color: white;
}

.details .recentOrders table tr td
{
    padding: 10px;
}
.details .recentOrders table tr td:last-child
{
    text-align: end;
}
.details .recentOrders table tr td:nth-child(2)
{
    text-align: center;
}
.details .recentOrders table tr td:nth-child(3)
{
    text-align: center;
}
.recentCustomer
{
    margin: 10px;
    position: relative;
    display: grid;
    min-height: 500px;
    padding: 20px;
    background: white;
    box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
    border-radius: 20px;
}
.recentCustomer .imgBx
{
    position: relative;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
}
.recentCustomer .imgBx img
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.recentCustomer table tr:hover
{
    background: grey;
    color: white;
}
.recentCustomer button:hover
{
    background: white;
    color: grey;
}
.recentCustomer table tr td
{
    padding: 12px 10px;
}
.recentCustomer table tr td h4
{
    font-size: 16px;
    font-weight: 500;
    line-height: 1.2em;
}
.recentCustomer table tr td h4 span
{
    font-size: 14px;
    color: darkgray;
}
.recentCustomer table tr:hover
{
    background: grey;
    color: white;
}
.recentCustomer table tr:hover td h4 span
{
    color: white;
}
</style>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome Back, {{ auth()->user()->name }} </h1>
</div>    
<div class="cardBox">
  <div class="card">
      <div>
          <div class="numbers">{{ $tf->count() }}</div>
          <div class="cardName">Transaction</div>
      </div>
      <div class="iconBx">
          <ion-icon name="eye-outline"></ion-icon>
      </div>
  </div>
  <div class="card">
      <div>
          <div class="numbers">{{ $post->count() }}</div>
          <div class="cardName">Categories Suply</div>
      </div>
      <div class="iconBx">
          <ion-icon name="chatbubbles-outline"></ion-icon>
      </div>
  </div>
  
  <div class="card">
      <div>
          <div class="numbers">{{ $category->count() }}</div>
          <div class="cardName">Category Product</div>
      </div>
      <div class="iconBx">
          <ion-icon name="person-outline"></ion-icon>
      </div>
  </div>
  <div class="card">
      <div>
          <div class="numbers">{{ $user->count() }}</div>
          <div class="cardName">Workers</div>
      </div>
      <div class="iconBx">
          <ion-icon name="person-outline"></ion-icon>
      </div>
  </div>
</div>
<div class="details">
  
  <div class="recentCustomer">
      <div class="cardHeader">
          <h2>Recent New Orders</h2>
      </div>
      <table>
            <thead>
                <tr>
                    <td>Name Stuff</td>
                    <td>Count</td>
                    <td>Customer Name</td>
                    <td>Date</td>
                    <td>By Cashier</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($tf->reverse() as $jwb => $item)
                <tr @if ($loop->first)  @endif>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->count }}</td>
                    <td>{{ $item->customer }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->name }}</td>
                    <td><span class="status delivered">Success</span></td>
                </tr>
                @if ($loop->index == 4)@break @endif
                    
                @endforeach
            </tbody>
      </table>
  </div>
</div>
@endsection
@extends('layouts.master')

@section('content')

<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Techlabtz Proforma Invoices</h4>
                  <p class="card-category">Recent Proforma</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          QTY
                        </th>
                        <th>
                          Particulars
                        </th>
                        <th>
                          @price
                        </th>
                        <th>
                          Tsh
                        </th>
                        <th>
                          cents
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            20
                          </td>
                          <td>
                            Laptop
                          </td>
                          <td>
                            50,000
                          </td>
                          <td class="text-primary">
                            1,000,000
                          </td>
                          <td>
                          00
                          </td>
                        </tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="text-decoration:bold">Grand Total</td>
                        <td style="font-decoration:bold">1,000,0000</td>
                        <td style="font-decoration:bold">00</td>
                        <tr>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>

@endsection('content')
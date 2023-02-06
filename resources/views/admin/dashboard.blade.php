@extends('admin.layouts.master')
@section('title', 'Admin')

@section('content')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row"></div>
    <div class="content-body">
      <!-- ICO Token &  Distribution-->
      <div class="row match-height">
        <div class="col-xl-8 col-12">
          <div class="card card-transparent">
            <div class="card-header card-header-transparent py-20">
              <div class="btn-group dropdown">
                <h6>ICO Token (Supply & Demand)</h6>
              </div>
            </div>
            <div id="ico-token-supply-demand-chart" class="height-300"></div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12">
          <div class="card card-transparent">
            <div class="card-header card-header-transparent">
              <h6 class="card-title">Token distribution</h6>
            </div>
            <div class="card-content">
              <div id="token-distribution-chart" class="height-200 donut donutShadow"></div>
              <div class="card-body">
                <div class="row mx-0">
                  <ul class="token-distribution-list col-md-6 mb-0">
                    <li class="crowd-sale">Crowd sale <span class="float-right text-muted">41%</span>
                    </li>
                    <li class="team">Team <span class="float-right text-muted">18%</span>
                    </li>
                    <li class="advisors">Advisors <span class="float-right text-muted">15%</span>
                    </li>
                  </ul>
                  <ul class="token-distribution-list col-md-6 mb-0">
                    <li class="project-reserve">Project <span class="float-right text-muted">10%</span>
                    </li>
                    <li class="master-nodes">Master nodes <span class="float-right text-muted">8%</span>
                    </li>
                    <li class="program">Program <span class="float-right text-muted">8%</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ ICO Token &  Distribution-->
      <!-- Purchase token -->
      <div class="row">
        <div class="col-12">
          <div class="card pull-up">
            <div class="card-content collapse show">
              <div class="card-body">
                <form class="form-horizontal form-purchase-token row" action="buy-ico.html">
                  <div class="col-md-2 col-12">
                    <fieldset class="form-label-group mb-0">
                      <input type="text" class="form-control" id="ico-token" value="5000" required="" autofocus="">
                      <label for="ico-token">ICO Token</label>
                    </fieldset>
                  </div>
                  <div class="col-md-1 col-12 text-center">
                    <span class="la la-arrow-right"></span>
                  </div>
                  <div class="col-md-2 col-12">
                    <fieldset class="form-label-group mb-0">
                      <input type="text" class="form-control" id="selected-crypto" value="1" required="" autofocus="">
                      <label for="selected-crypto">ETH</label>
                    </fieldset>
                  </div>
                  <div class="col-md-1 col-12">
                    <select class="custom-select">
                      <option selected>ETH</option>
                      <option value="1">BTC</option>
                      <option value="2">LTC</option>
                      <option value="3">USDT</option>
                      <option value="3">Credit Card</option>
                    </select>
                  </div>
                  <div class="col-md-4 col-12 mb-1">
                    <fieldset class="form-label-group mb-0">
                      <input type="text" class="form-control" id="wallet-address" value="0xe834a970619218d0a7db4ee5a3c87022e71e177f" required="" autofocus="">
                      <label for="wallet-address">Wallet address</label>
                    </fieldset>
                  </div>
                  <div class="col-md-2 col-12 text-center">
                    <button type="submit" class="btn-gradient-secondary">Buy now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Purchase token -->
      <!-- ICO Token balance & sale progress -->
      <div class="row">
        <div class="col-md-8 col-12">
          <h6 class="my-2">ICO Token balance</h6>
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="col-12">
                  <div class="row">
                    <div class="col-md-8 col-12">
                      <p>
                        <strong>Your balance:</strong>
                      </p>
                      <h1>3,458.88 CIC</h1>
                      <p class="mb-0">Welcome bonus <strong>+30%</strong> expires in 21 days. </p>
                    </div>
                    <div class="col-md-4 col-12 text-center text-md-right">
                      <button type="button" class="btn-gradient-secondary mt-2">Withdraw <i class="la la-angle-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <h6 class="my-2">Token sale progress</h6>
          <div class="card">
            <div class="card-content collapse show">
              <div class="card-body">
                <div class="font-small-3 clearfix">
                  <span class="float-left">$0</span>
                  <span class="float-right">$5M</span>
                </div>
                <div class="progress progress-sm my-1 box-shadow-2">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="font-small-3 clearfix">
                  <span class="float-left">Distributed <br>
                    <strong>6,235,125 CIC</strong>
                  </span>
                  <span class="float-right text-right">Contributed <br>
                    <strong>5478 ETH | 80 BTC</strong>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ ICO Token balance & sale progress -->
      <!-- Recent Transactions -->
      <div class="row">
        <div id="recent-transactions" class="col-12">
          <h6 class="my-2">Recent Transactions</h6>
          <div class="card">
            <div class="card-content">
              <div class="table-responsive">
                <table id="recent-orders" class="table table-hover table-xl mb-0">
                  <thead>
                    <tr>
                      <th class="border-top-0">Status</th>
                      <th class="border-top-0">Date</th>
                      <th class="border-top-0">Amount</th>
                      <th class="border-top-0">Currency</th>
                      <th class="border-top-0">Currency</th>
                      <th class="border-top-0">Tokens (CIC)</th>
                      <th class="border-top-0">Details</th>
                      <th class="border-top-0"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-truncate">
                        <i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid
                      </td>
                      <td class="text-truncate">
                        <a href="#">2018-01-03</a>
                      </td>
                      <td class="text-truncate">
                        <a href="#" class="mb-0 btn-sm btn btn-outline-success round">Deposit</a>
                      </td>
                      <td class="text-truncate p-1">5.34111</td>
                      <td>
                        <i class="cc ETH-alt"></i> ETH
                      </td>
                      <td>-</td>
                      <td class="text-truncate">Deposit to your Balance</td>
                      <td>
                        <i class="la la-thumbs-up warning float-right"></i>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-truncate">
                        <i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid
                      </td>
                      <td class="text-truncate">
                        <a href="#">2018-01-03</a>
                      </td>
                      <td class="text-truncate">
                        <a href="#" class="mb-0 btn-sm btn btn-outline-success round">Deposit</a>
                      </td>
                      <td class="text-truncate p-1">5.34111</td>
                      <td>
                        <i class="cc ETH-alt"></i> ETH
                      </td>
                      <td>3,258</td>
                      <td class="text-truncate">Tokens Purchase</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td class="text-truncate">
                        <i class="la la-dot-circle-o warning font-medium-1 mr-1"></i> in Process
                      </td>
                      <td class="text-truncate">
                        <a href="#">2018-01-21</a>
                      </td>
                      <td class="text-truncate">
                        <a href="#" class="mb-0 btn-sm btn btn-outline-warning round">Referral</a>
                      </td>
                      <td class="text-truncate p-1">-</td>
                      <td>-</td>
                      <td>200.88</td>
                      <td class="text-truncate">Referral Promo Bonus</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td class="text-truncate">
                        <i class="la la-dot-circle-o danger font-medium-1 mr-1"></i> Pending
                      </td>
                      <td class="text-truncate">
                        <a href="#">2018-01-25</a>
                      </td>
                      <td class="text-truncate">
                        <a href="#" class="mb-0 btn-sm btn btn-outline-danger round">Withdrawal</a>
                      </td>
                      <td class="text-truncate p-1">-</td>
                      <td>-</td>
                      <td>-3,458.88</td>
                      <td class="text-truncate">Tokens withdrawn</td>
                      <td>
                        <i class="la la-dollar warning float-right"></i>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-truncate">
                        <i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid
                      </td>
                      <td class="text-truncate">
                        <a href="#">2018-01-28</a>
                      </td>
                      <td class="text-truncate">
                        <a href="#" class="mb-0 btn-sm btn btn-outline-danger round">Deposit</a>
                      </td>
                      <td class="text-truncate p-1">0.8791</td>
                      <td>
                        <i class="cc BTC-alt"></i> BTC
                      </td>
                      <td>--</td>
                      <td class="text-truncate">Deposit to your Balance</td>
                      <td>
                        <i class="la la-thumbs-up warning float-right"></i>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection
    

    


    
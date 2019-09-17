<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>A simple, clean, and responsive HTML invoice template</title>

        <style>
            .invoice-box {
                max-width: 800px;
                margin: auto;
                padding: 30px;
                border: 1px solid #eee;
                box-shadow: 0 0 10px rgba(0, 0, 0, .15);
                font-size: 16px;
                line-height: 24px;
                font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                color: #555;
            }

            .invoice-box table {
                width: 100%;
                line-height: inherit;
                text-align: left;
            }

            .invoice-box table td {
                padding: 5px;
                vertical-align: top;width:25%;
            }
            /*.invoice-box table tr td:nth-child(2) {
                text-align: right!important;float:right!important;
            }*/
            .invoice-box table tr.top table td:nth-child(2) {
                text-align: right!important;float:right!important;
            }

            .invoice-box table tr.top table td {
                padding-bottom: 20px;
            }

            .invoice-box table tr.top table td.title {
                font-size: 45px;
                line-height: 45px;
                color: #333;
            }

            .invoice-box table tr.information table td {
                padding-bottom: 40px;
            }

            .invoice-box table tr.heading td {
                background: #eee;
                /*border-bottom: 1px solid #ddd;*/
                font-weight: bold;
            }

            .invoice-box table tr.details td {
                padding-bottom: 20px;
            }

            .invoice-box table tr.item td{
                border-bottom: 1px solid #eee;
            }

            .invoice-box table tr.item.last td {
                border-bottom: none;
            }

            .invoice-box table tr.total td:nth-child(2) {
                border-top: 2px solid #eee;
                font-weight: bold;
            }

            @media only screen and (max-width: 600px) {
                .invoice-box table tr.top table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }

                .invoice-box table tr.information table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }
            }

            /** RTL **/
            .rtl {
                direction: rtl;
                font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            }

            .rtl table {
                text-align: right;
            }

            .rtl table tr td:nth-child(2) {
                text-align: left;
            }
        </style>
    </head>
    <body>
        <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tbody><tr class="top">
                        <td colspan="7">
                            <table>
                                <tbody><tr>
                                        <td class="title">
                                            <img src="http://localhost/schoolshark/public/sites/images/logo.png" style="width:100%; max-width:300px;">
                                        </td>

                                        <td>
                                            Invoice #:<br> {{$order_details->orders[0]->order_no}}<br>
                                            Created: {{date('d M Y', strtotime($order_details->orders[0]->created_at))}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr class="information">
                        <td colspan="4">
                            <table>
                                <tbody><tr>
                                        <td>
                                            {{$order_details->first_name}} {{$order_details->last_name}} <br/>
                                            {{$order_details->apartment.','}} <br/>
                                            {{$order_details->address.','}} {{$order_details->city.','}} 
                                            {{$order_details->state.','}} {{$order_details->country.' '}} {{$order_details->pin_code}}

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                <table>

                    <tr class="heading">
                        <td colspan="4">Payment Method</td>
                    </tr>

                    <tr class="details">
                        <td>Paypal</td>
                    </tr>

                </table>

                <tr class="heading">
                    <td>Item </td>
                    <td>Quantity</td>
                    <td>Unit Price</td>
                    <td>Total Price </td>
                </tr>
                @foreach($order_details->orders[0]->orderItems as $order_detail)
                    <tr class="item">
                        <td> {{ $order_detail->item_name }}</td>
                        <td>{{$order_detail->quantity }}</td>

                        <td>${{ $amt[] = number_format($order_detail->amount,2)}}</td>
                        <td>
                            ${{number_format($order_detail->amount * $order_detail->quantity,2)}}
                        </td>
                    </tr>
                @endforeach
                <tr class="total">
                    <td></td>
                    <td></td>
                    <td></td>

                    <td> Sub Total: ${{number_format(array_sum($amt), 2)}}</td>
                </tr>
                <tr class="total">
                    <td></td>
                    <td></td>
                    <td></td>

                    <td>
                        Total Amount: ${{number_format(array_sum($amt) ,2)}}
                    </td>
                </tr>
                </tbody></table>
        </div>
    </body>
</html>

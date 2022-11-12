@extends('layouts.app')

@section('content')


        <div class="invoice-box">
            <table  >
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="images/logo2.png" style="width:150px; height:auto" alt="">
                                </td>
                                <td>
                                    Invoice #: 25<br>
                                    Created: January 1, 2019<br>
                                    Due: February 1, 2019
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    Easybook , Inc.<br>
                                    USA 27TH Brooklyn NY<br>
                                    <a href="#"  style="color:#666; text-decoration:none">JessieManrty@domain.com</a>
                                    <br>
                                    <a href="#" style="color:#666; text-decoration:none">+4(333)123456</a>
                                </td>
                                <td>
                                    Jessie Manrty<br>
                                    <a href="#"  style="color:#666; text-decoration:none">yourmail@domain.com</a>
                                    <br>
                                    <a href="#"  style="color:#666; text-decoration:none">+7(123)987654</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="heading">
                    <td>
                        Payment Method
                    </td>
                    <td>
                        Check #
                    </td>
                </tr>
                <tr class="details">
                    <td>
                        Visa ending **** 4242
                    </td>
                    <td>
                        Check
                    </td>
                </tr>
                <tr class="heading">
                    <td>
                        Option
                    </td>
                    <td>
                        Details
                    </td>
                </tr>
                <tr class="item">
                    <td>
                        Hotel
                    </td>
                    <td>
                        Premium Plaza Hotel
                    </td>
                </tr>
                <tr class="item">
                    <td>
                        Room Type
                    </td>
                    <td>
                        Standard Family Room $81
                    </td>
                </tr>
                <tr class="item ">
                    <td>
                        Days
                    </td>
                    <td>
                        3
                    </td>
                </tr>
                <tr class="item ">
                    <td>
                        Persons
                    </td>
                    <td>
                        3
                    </td>
                </tr>
                <tr class="item last">
                    <td>
                        Taxes
                    </td>
                    <td>
                        $12
                    </td>
                </tr>
                <tr class="total">
                    <td></td>
                    <td style="padding-top:50px;">
                        Total: $690.00
                    </td>
                </tr>
            </table>
        </div>
        <a href="javascript:window.print()" class="print-button">Print this invoice</a>

@endsection

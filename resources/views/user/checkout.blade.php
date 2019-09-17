@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('public/sites/css/slider.css') }}">
@stop
@section('content')
<section class="product-wrapper dashboard-body">
    <div class="container-fluid">
        @if ($message = Session::get('success'))
        <div class="w3-panel w3-green w3-display-container">
            <span onclick="this.parentElement.style.display = 'none'"
                  class="w3-button w3-green w3-large w3-display-topright">&times;</span>
            <p>{!! $message !!}</p>
        </div>
        <?php Session::forget('success'); ?>
        @endif
        @if ($message = Session::get('error'))
        <div class="w3-panel w3-red w3-display-container">
            <span onclick="this.parentElement.style.display = 'none'"
                  class="w3-button w3-red w3-large w3-display-topright">&times;</span>
            <p>{!! $message !!}</p>
        </div>
        <?php Session::forget('error'); ?>
        @endif
        <div class="checkout-info">
            <div class="row">	
                <div class="col-md-12 col-sm-12">
                    <div class="shipping">
                        <h6>Checkout</h6>
                        <img src="{{ url('public/sites/images/single-img.png') }}">
                    </div>
                </div>
            </div>
            <div class="row">	

                <div class="col-md-6">

                    <div class="contact-info">
                        <div class="cont-info shipping-info">
                            <div class="row">
                                <div class="col-md-6"> <h4 class="cont-head"> Contact information </h4>  </div>
                                <div class="col-md-12 contact_email"> 
                                    {{$shipping_info['email']}}
                                </div>

                                <div class="col-md-12 shipping">
                                    <b>Shipping address</b>
                                    <div clas="address">
                                        {{$shipping_info['first_name']}} {{$shipping_info['last_name']}}
                                        {{$shipping_info['apartment'].','}}  {{$shipping_info['address'].','}} {{$shipping_info['city'].','}} {{$shipping_info['state'].','}} {{$shipping_info['country'].','}} {{$shipping_info['pin_code']}}
                                    </div>
                                </div>
                                <div class="col-md-12 shipping">
                                    <b>Contact number  </b>
                                    <div class="phone_number">
                                        {{$shipping_info['phone_number']}}
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="payment-info">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="add-product">

                                    <!-- product row -->
                                    @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3">
                                            <div class="pro-img"> 
                                                <img src="{{ !empty($details['photo']) ?
                                                                url('public/images/books/original/' . $details['photo']) :
                                                                        url('public/images/books/default.gif')}}"> 
                                                <span class="qty-cir">{{ $details['quantity'] }}</span>
                                            </div> </div>

                                        <div class="col-md-5 col-lg-6"> <div class="pro-det"> 
                                                <h4> {{ $details['name'] }} </h4>
                                            </div> 
                                        </div>

                                        <div class="col-md-4 col-lg-3"> <div class="price-cell"> ${{ $details['price'] }} USD </div> </div>

                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="total-code">
                                    <ul>
                                        <?php $total = 0; //echo '<pre>';print_r(session('cart'));?>
                                        @if (session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                <?php $total += $details['price'] * $details['quantity'] ?>
                                            @endforeach
                                        @else
                                            <?php $total = 0; ?>
                                        @endif
                                        <li> <label class="Sub-total">Subtotal</label>   <span class="total" id="sub_total"> ${{ $total }} USD </span>  </li>

                                        <li> <label class="Sub-total">Shipping</label>
                                            <span class="total fedx-option-list">${{ session('shipping_amount') . " " .session('shipping_currency') }}</span>
                                        </li>
                                        <li> <label class="Sub-total-total">Total </label>  <span class="total-all"> $<span id="total">{{ number_format($total+session('shipping_amount'), 2) }} USD</span> </span>  </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <form class="w3-container w3-display-middle w3-card-4 w3-padding-16" method="POST" id="payment-form"
                                      action="{{url('/paypal')}}">
                                    {{ csrf_field() }}
                                    <div class="express-paypal">
                                        <div class="payment-checkbox">
                                            <!--model start-->
                                            <small> <a hre="#" data-toggle="modal" data-target="#myModal"> Terms and conditions </a> </small> 
                                            <div class="modal fade" id="myModal">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Terms and Conditions</h4>
                                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <b>Agreement between User and www.schoolshark.co</b>
                                                            <p>Welcome to www.schoolshark.co. The www.schoolshark.co website (the "Site") is comprised of various web pages operated by abc LLC ("abc"). www.schoolshark.co is offered to you conditioned on your acceptance without modification of the terms, conditions, and notices contained herein (the "Terms"). Your use of www.schoolshark.co constitutes your agreement to all such Terms. Please read these terms carefully, and keep a copy of them for your reference.</p>

                                                            <b>www.schoolshark.co is an E-Commerce Site.</b>

                                                            <p>abc LLC is a peer to peer textbook sales platform that connects students online to buy and sell textbooks to each other. abc is also a student loan consulting company along with regularly posted media.</p>

                                                            <b>Electronic Communications</b>
                                                            <p>Visiting www.schoolshark.co or sending emails to abc constitutes electronic communications. You consent to receive electronic communications and you agree that all agreements, notices, disclosures and other communications that we provide to you electronically, via email and on the Site, satisfy any legal requirement that such communications be in writing.</p>

                                                            <b>Your Account</b>
                                                            <p>If you use this site, you are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer, and you agree to accept responsibility for all activities that occur under your account or password. You may not assign or otherwise transfer your account to any other person or entity. You acknowledge that abc is not responsible for third party access to your account that results from theft or misappropriation of your account. abc and its associates reserve the right to refuse or cancel service, terminate accounts, or remove or edit content in our sole discretion.</p>

                                                            <b>Children Under Thirteen</b>
                                                            <p>abc does not knowingly collect, either online or offline, personal information from persons under the age of thirteen. If you are under 18, you may use www.schoolshark.co only with permission of a parent or guardian.</p>

                                                            <b>Cancellation/Refund Policy</b>
                                                            <p>You may contact us for a cancellation of a purchase or a refund at any time. Refunds will be dealt with on a case to case basis. Please contact us at schoolsharkllc@gmail.com with any questions.</p>

                                                            <b>Links to Third Party Sites/Third Party Services</b>
                                                            <p>www.schoolshark.co may contain links to other websites ("Linked Sites"). The Linked Sites are not under the control of abc and abc is not responsible for the contents of any Linked Site, including without limitation any link contained in a Linked Site, or any changes or updates to a Linked Site. abc is providing these links to you only as a convenience, and the inclusion of any link does not imply endorsement by abc of the site or any association with its operators.</p>

                                                            <p>Certain services made available via www.schoolshark.co are delivered by third party sites and organizations. By using any product, service or functionality originating from the www.schoolshark.co domain, you hereby acknowledge and consent that abc may share such information and data with any third party with whom abc has a contractual relationship to provide the requested product, service or functionality on behalf of www.schoolshark.co users and customers.</p>

                                                            <b>No Unlawful or Prohibited Use/Intellectual Property</b>
                                                            <p>You are granted a non-exclusive, non-transferable, revocable license to access and use www.schoolshark.co strictly in accordance with these terms of use. As a condition of your use of the Site, you warrant to abc that you will not use the Site for any purpose that is unlawful or prohibited by these Terms. You may not use the Site in any manner which could damage, disable, overburden, or impair the Site or interfere with any other party's use and enjoyment of the Site. You may not obtain or attempt to obtain any materials or information through any means not intentionally made available or provided for through the Site.</p>

                                                            <p>All content included as part of the Service, such as text, graphics, logos, images, as well as the compilation thereof, and any software used on the Site, is the property of abc or its suppliers and protected by copyright and other laws that protect intellectual property and proprietary rights. You agree to observe and abide by all copyright and other proprietary notices, legends or other restrictions contained in any such content and will not make any changes thereto.</p>

                                                            <p>You will not modify, publish, transmit, reverse engineer, participate in the transfer or sale, create derivative works, or in any way exploit any of the content, in whole or in part, found on the Site. abc content is not for resale. Your use of the Site does not entitle you to make any unauthorized use of any protected content, and in particular you will not delete or alter any proprietary rights or attribution notices in any content. You will use protected content solely for your personal use, and will make no other use of the content without the express written permission of abc and the copyright owner. You agree that you do not acquire any ownership rights in any protected content. We do not grant you any licenses, express or implied, to the intellectual property of abc or our licensors except as expressly authorized by these Terms.</p>

                                                            <b>Use of Communication Services</b>
                                                            <p>The Site may contain bulletin board services, chat areas, news groups, forums, communities, personal web pages, calendars, and/or other message or communication facilities designed to enable you to communicate with the public at large or with a group (collectively, "Communication Services"). You agree to use the Communication Services only to post, send and receive messages and material that are proper and related to the particular Communication Service.</p>

                                                            <p>By way of example, and not as a limitation, you agree that when using a Communication Service, you will not: defame, abuse, harass, stalk, threaten or otherwise violate the legal rights (such as rights of privacy and publicity) of others; publish, post, upload, distribute or disseminate any inappropriate, profane, defamatory, infringing, obscene, indecent or unlawful topic, name, material or information; upload files that contain software or other material protected by intellectual property laws (or by rights of privacy of publicity) unless you own or control the rights thereto or have received all necessary consents; upload files that contain viruses, corrupted files, or any other similar software or programs that may damage the operation of another's computer; advertise or offer to sell or buy any goods or services for any business purpose, unless such Communication Service specifically allows such messages; conduct or forward surveys, contests, pyramid schemes or chain letters; download any file posted by another user of a Communication Service that you know, or reasonably should know, cannot be legally distributed in such manner; falsify or delete any author attributions, legal or other proper notices or proprietary designations or labels of the origin or source of software or other material contained in a file that is uploaded; restrict or inhibit any other user from using and enjoying the Communication Services; violate any code of conduct or other guidelines which may be applicable for any particular Communication Service; harvest or otherwise collect information about others, including e-mail addresses, without their consent; violate any applicable laws or regulations.</p>

                                                            <p>abc has no obligation to monitor the Communication Services. However, abc reserves the right to review materials posted to a Communication Service and to remove any materials in its sole discretion. abc reserves the right to terminate your access to any or all of the Communication Services at any time without notice for any reason whatsoever.</p>

                                                            <p>abc reserves the right at all times to disclose any information as necessary to satisfy any applicable law, regulation, legal process or governmental request, or to edit, refuse to post or to remove any information or materials, in whole or in part, in abc's sole discretion.</p>

                                                            <p>Always use caution when giving out any personally identifying information about yourself or your children in any Communication Service. abc does not control or endorse the content, messages or information found in any Communication Service and, therefore, abc specifically disclaims any liability with regard to the Communication Services and any actions resulting from your participation in any Communication Service. Managers and hosts are not authorized abc spokespersons, and their views do not necessarily reflect those of abc.</p>

                                                            <p>Materials uploaded to a Communication Service may be subject to posted limitations on usage, reproduction and/or dissemination. You are responsible for adhering to such limitations if you upload the materials.<p>

                                                                <b>Materials Provided to www.schoolshark.co or Posted on Any abc Web Page</b>
                                                            <p>abc does not claim ownership of the materials you provide to www.schoolshark.co (including feedback and suggestions) or post, upload, input or submit to any abc Site or our associated services (collectively "Submissions"). However, by posting, uploading, inputting, providing or submitting your Submission you are granting abc, our affiliated companies and necessary sublicensees permission to use your Submission in connection with the operation of their Internet businesses including, without limitation, the rights to: copy, distribute, transmit, publicly display, publicly perform, reproduce, edit, translate and reformat your Submission; and to publish your name in connection with your Submission.</p>

                                                            <p>No compensation will be paid with respect to the use of your Submission, as provided herein. abc is under no obligation to post or use any Submission you may provide and may remove any Submission at any time in abc's sole discretion.</p>

                                                            <p>By posting, uploading, inputting, providing or submitting your Submission you warrant and represent that you own or otherwise control all of the rights to your Submission as described in this section including, without limitation, all the rights necessary for you to provide, post, upload, input or submit the Submissions.</p>

                                                            <b>Third Party Accounts</b>
                                                            <p>You will be able to connect your abc account to third party accounts. By connecting your abc account to your third party account, you acknowledge and agree that you are consenting to the continuous release of information about you to others (in accordance with your privacy settings on those third party sites). If you do not want information about you to be shared in this manner, do not use this feature.</p>

                                                            <b>International Users</b>
                                                            <p>The Service is controlled, operated and administered by abc from our offices within the USA. If you access the Service from a location outside the USA, you are responsible for compliance with all local laws. You agree that you will not use the abc Content accessed through www.schoolshark.co in any country or in any manner prohibited by any applicable laws, restrictions or regulations.</p>

                                                            <b>Indemnification</b>
                                                            <p>You agree to indemnify, defend and hold harmless abc, its officers, directors, employees, agents and third parties, for any losses, costs, liabilities and expenses (including reasonable attorney's fees) relating to or arising out of your use of or inability to use the Site or services, any user postings made by you, your violation of any terms of this Agreement or your violation of any rights of a third party, or your violation of any applicable laws, rules or regulations. abc reserves the right, at its own cost, to assume the exclusive defense and control of any matter otherwise subject to indemnification by you, in which event you will fully cooperate with abc in asserting any available defenses.</p>

                                                            <b>Arbitration</b>
                                                            <p>In the event the parties are not able to resolve any dispute between them arising out of or concerning these Terms and Conditions, or any provisions hereof, whether in contract, tort, or otherwise at law or in equity for damages or any other relief, then such dispute shall be resolved only by final and binding arbitration pursuant to the Federal Arbitration Act, conducted by a single neutral arbitrator and administered by the American Arbitration Association, or a similar arbitration service selected by the parties, in a location mutually agreed upon by the parties. The arbitrator's award shall be final, and judgment may be entered upon it in any court having jurisdiction. In the event that any legal or equitable action, proceeding or arbitration arises out of or concerns these Terms and Conditions, the prevailing party shall be entitled to recover its costs and reasonable attorney's fees. The parties agree to arbitrate all disputes and claims in regards to these Terms and Conditions or any disputes arising as a result of these Terms and Conditions, whether directly or indirectly, including Tort claims that are a result of these Terms and Conditions. The parties agree that the Federal Arbitration Act governs the interpretation and enforcement of this provision. The entire dispute, including the scope and enforceability of this arbitration provision shall be determined by the Arbitrator. This arbitration provision shall survive the termination of these Terms and Conditions.</p>

                                                            <b>Class Action Waiver</b>
                                                            <p>Any arbitration under these Terms and Conditions will take place on an individual basis; class arbitrations and class/representative/collective actions are not permitted. THE PARTIES AGREE THAT A PARTY MAY BRING CLAIMS AGAINST THE OTHER ONLY IN EACH'S INDIVIDUAL CAPACITY, AND NOT AS A PLAINTIFF OR CLASS MEMBER IN ANY PUTATIVE CLASS, COLLECTIVE AND/ OR REPRESENTATIVE PROCEEDING, SUCH AS IN THE FORM OF A PRIVATE ATTORNEY GENERAL ACTION AGAINST THE OTHER. Further, unless both you and abc agree otherwise, the arbitrator may not consolidate more than one person's claims, and may not otherwise preside over any form of a representative or class proceeding.</p>

                                                            <b>Liability Disclaimer</b>
                                                            <p>THE INFORMATION, SOFTWARE, PRODUCTS, AND SERVICES INCLUDED IN OR AVAILABLE THROUGH THE SITE MAY INCLUDE INACCURACIES OR TYPOGRAPHICAL ERRORS. CHANGES ARE PERIODICALLY ADDED TO THE INFORMATION HEREIN. SCHOOL SHARK LLC AND/OR ITS SUPPLIERS MAY MAKE IMPROVEMENTS AND/OR CHANGES IN THE SITE AT ANY TIME.</p>

                                                            <p>SCHOOL SHARK LLC AND/OR ITS SUPPLIERS MAKE NO REPRESENTATIONS ABOUT THE SUITABILITY, RELIABILITY, AVAILABILITY, TIMELINESS, AND ACCURACY OF THE INFORMATION, SOFTWARE, PRODUCTS, SERVICES AND RELATED GRAPHICS CONTAINED ON THE SITE FOR ANY PURPOSE. TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, ALL SUCH INFORMATION, SOFTWARE, PRODUCTS, SERVICES AND RELATED GRAPHICS ARE PROVIDED "AS IS" WITHOUT WARRANTY OR CONDITION OF ANY KIND. SCHOOL SHARK LLC AND/OR ITS SUPPLIERS HEREBY DISCLAIM ALL WARRANTIES AND CONDITIONS WITH REGARD TO THIS INFORMATION, SOFTWARE, PRODUCTS, SERVICES AND RELATED GRAPHICS, INCLUDING ALL IMPLIED WARRANTIES OR CONDITIONS OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE AND NON-INFRINGEMENT.</p>

                                                            <p>TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, IN NO EVENT SHALL SCHOOL SHARK LLC AND/OR ITS SUPPLIERS BE LIABLE FOR ANY DIRECT, INDIRECT, PUNITIVE, INCIDENTAL, SPECIAL, CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER INCLUDING, WITHOUT LIMITATION, DAMAGES FOR LOSS OF USE, DATA OR PROFITS, ARISING OUT OF OR IN ANY WAY CONNECTED WITH THE USE OR PERFORMANCE OF THE SITE, WITH THE DELAY OR INABILITY TO USE THE SITE OR RELATED SERVICES, THE PROVISION OF OR FAILURE TO PROVIDE SERVICES, OR FOR ANY INFORMATION, SOFTWARE, PRODUCTS, SERVICES AND RELATED GRAPHICS OBTAINED THROUGH THE SITE, OR OTHERWISE ARISING OUT OF THE USE OF THE SITE, WHETHER BASED ON CONTRACT, TORT, NEGLIGENCE, STRICT LIABILITY OR OTHERWISE, EVEN IF SCHOOL SHARK LLC OR ANY OF ITS SUPPLIERS HAS BEEN ADVISED OF THE POSSIBILITY OF DAMAGES. BECAUSE SOME STATES/JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, THE ABOVE LIMITATION MAY NOT APPLY TO YOU. IF YOU ARE DISSATISFIED WITH ANY PORTION OF THE SITE, OR WITH ANY OF THESE TERMS OF USE, YOUR SOLE AND EXCLUSIVE REMEDY IS TO DISCONTINUE USING THE SITE.</p>

                                                            <b>Termination/Access Restriction</b>
                                                            <p>abc reserves the right, in its sole discretion, to terminate your access to the Site and the related services or any portion thereof at any time, without notice. To the maximum extent permitted by law, this agreement is governed by the laws of the State of Minnesota and you hereby consent to the exclusive jurisdiction and venue of courts in Minnesota in all disputes arising out of or relating to the use of the Site. Use of the Site is unauthorized in any jurisdiction that does not give effect to all provisions of these Terms, including, without limitation, this section.</p>

                                                            <p>You agree that no joint venture, partnership, employment, or agency relationship exists between you and abc as a result of this agreement or use of the Site. abc's performance of this agreement is subject to existing laws and legal process, and nothing contained in this agreement is in derogation of abc's right to comply with governmental, court and law enforcement requests or requirements relating to your use of the Site or information provided to or gathered by abc with respect to such use. If any part of this agreement is determined to be invalid or unenforceable pursuant to applicable law including, but not limited to, the warranty disclaimers and liability limitations set forth above, then the invalid or unenforceable provision will be deemed superseded by a valid, enforceable provision that most closely matches the intent of the original provision and the remainder of the agreement shall continue in effect.</p>

                                                            <p>Unless otherwise specified herein, this agreement constitutes the entire agreement between the user and abc with respect to the Site and it supersedes all prior or contemporaneous communications and proposals, whether electronic, oral or written, between the user and abc with respect to the Site. A printed version of this agreement and of any notice given in electronic form shall be admissible in judicial or administrative proceedings based upon or relating to this agreement to the same extent and subject to the same conditions as other business documents and records originally generated and maintained in printed form. It is the express wish to the parties that this agreement and all related documents be written in English.</p>

                                                            <b>Changes to Terms</b>
                                                            <p>abc reserves the right, in its sole discretion, to change the Terms under which www.schoolshark.co is offered. The most current version of the Terms will supersede all previous versions. abc encourages you to periodically review the Terms to stay informed of our updates.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--model end-->
                                            <input type="checkbox" id="terms" name="terms" required="">
                                        </div>
                                        <input class="w3-input w3-border" id="amount" type="text" name="amount" value="{{ $total }}" hidden="">
                                        <input class="w3-input w3-border" id="user_id" type="text" name="user_id" value="{{$shipping_info['user_id']}}" hidden="">
                                        <input class="w3-input w3-border" id="shipping_id" type="text" name="shipping_id" value="{{$shipping_info['shipping_info_id']}}" hidden="">
                                        <label class="exp-chekout">Express Checkout</label>
                                        <button class="btn btn-primary all-btn-theme w3btn" style="display:block;">Pay with PayPal</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
@section('pagescript')
@stop

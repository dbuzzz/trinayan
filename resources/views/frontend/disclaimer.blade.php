@extends('frontend.layout')
@section('extern-css')
<link rel="stylesheet" type="text/css" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

 
@endsection
@section('content')

<div class="disclaimer-banner ">
    <div class="detail-heading container-fluid">
        <h1>DISCLAIMER</h1>
    </div>
</div>
<div class="disclaimer container mt-4">
    <ul>
        <li>Trinayan Homes Pvt. Ltd. Land and Infrastructure Limited ("Trinayan Homes Pvt. Ltd.") owns and retains intellectual property rights including but not limited to copyright or trademarks, as the case may be, on all the text, graphics, sound, "off-site" web pages, hypertext link etc. displayed on this website.</li>
        <li>The web site may contain inaccuracies and typographical and clerical errors.</li>
        <li>Trinayan Homes Pvt. Ltd. expressly disclaims any obligation(s) to update this website or any of the materials on this website or internet. Trinayan Homes Pvt. Ltd. does not warrant the accuracy or completeness of the materials.</li>
        <li>You expressly agree that the use of the service, and any software obtained through or in connection with the service is at your own risk and is done "at will."</li>
        <li>The project details information on the website is purely conceptual and is not a legal offer. Trinayan Homes Pvt. Ltd. reserves the right to add/delete/modify any details/specifications/elevations mentioned.</li>
        <li>The information and material on this web site is provided for general information only and should not be made basis for making any business decisions, as it is subject to change without notice.</li>
        <li>This website does not intend to provide investment, tax or legal advice of any kind neither it should be construed of providing the same. Any advice or information received via this web site should not be relied upon without consulting primary or accurate or up-to-date source(s) of information or specific professional advice.</li>
        <li>This website may from time to time enable you to access listings of possible employment opportunities with us and to submit resumes and applications online. Before submitting any personal information, please review our privacy policy to determine its acceptability to you.</li>
        <li><b>Advertising Material:</b> Trinayan Homes Pvt. Ltd. shall not be responsible, WHATSOEVER, for any advertiser's claim, error, omission or inaccuracy in advertising material, and reserves the right to omit, suspend or change the position of any advertising material submitted for insertion on our Site. Acceptance of advertisements on the Site shall be subject to Trinayan Homes Pvt. Ltd. Terms and Conditions, available on request.</li>
        <li><b>No Warranty</b>: The information and materials contained in this site, including text, graphics, links or other items - are provided "as is," "as available". Trinayan Homes Pvt. Ltd. does not represent or warrant the accuracy, adequacy or completeness of the information and materials or the reliability of any advice, opinion, statement or other information displayed or distributed and expressly disclaims liability for errors or omissions therein. No warranties of any kind, implied, express or statutory, including but not limited to the warranties of non-infringement of third party rights, title, merchantability, fitness for a particular purpose and freedom from computer virus, are given in conjunction with the information and materials.</li>
        <li><b>Links</b>: This site may contain links to web sites controlled or offered by third parties (non-affiliates of Trinayan Homes Pvt. Ltd.) on World Wide Web that are not under its control. Trinayan Homes Pvt. Ltd. hereby disclaims any liability, whatsoever, for any information, materials, products or services posted or offered at any of the third party sites linked to this web site. By creating a link to a third party web site, Trinayan Homes Pvt. Ltd. does not endorse or recommend any products or services offered or information contained at that web site, nor is Trinayan Homes Pvt. Ltd. liable for any failure of products or services offered or advertised at those sites, these links are provided only for your convenience in order to help you find relevant websites easily. Such third party may have a privacy policy different from that of Trinayan Homes Pvt. Ltd. and the third party website may provide less security than the Trinayan Homes Pvt. Ltd. site. By providing such links, we shall not be deemed to endorse, recommend, approve, guarantee or introduce any third parties or their services or products, or any facts, views, advice, information and/or products found on such websites.</li>
        <li>Trinayan Homes Pvt. Ltd. may modify, suspend, discontinue or restrict the use of any portion of the Service, including the availability of any portion of the content, at any time, without any further notice or liability.</li>
        <li><b>Site Security</b>: The security of all information associated with our customers is an important concern to us. We, at Trinayan Homes Pvt. Ltd. therefore exercise the utmost care in providing secure transmission of your information from your computer to our servers. Unfortunately, no data transmission over the Internet can be guaranteed to be 100% secure. As a result, Trinayan Homes Pvt. Ltd. has implemented adequate security measures to protect against any misuse, theft or alteration of information stored on the www.Trinayanhomes .in web site. While we strive to protect your information, Trinayan Homes Pvt. Ltd. and its affiliates cannot ensure or warrant the security of any information you transmit to us or from our online products or services, and you do so at your own risk. We use industry standard efforts to safeguard the confidentiality of your information; however, "perfect security" does not exist on the Internet. This site contains links to other sites. Trinayan Homes Pvt. Ltd. is not responsible for the privacy practices or the content of such Web sites.</li>
        <li><b>Limitation of Liability</b>: This website is provided to you on an "as is" and "where-is" basis, without any warranty. Trinayan Homes Pvt. Ltd. accepts no liability and shall not be liable for any loss or damage arising directly or indirectly (including special, incidental, punitive or consequential loss or damage) from your use of this web site, howsoever arising, including any loss, damage or expense arising from, but not limited to, any defect, error, imperfection, fault, omission, mistake or inaccuracy with this web site, its contents or associated services, or due to any unavailability of the web site or any part thereof or any contents or associated services. Further, inspite of Trinayan Homes Pvt. Ltd.'s best endeavours of providing best security, it will not accept any liability for any loss or damage arising directly or indirectly (including special, incidental or consequential loss or damage), howsoever caused to you, as a result of any computer viruses or worms, software bombs or the like arising from this web site. References, if any, in this website to any products, events or services do not necessarily constitute or imply Trinayan Homes Pvt. Ltd.'s endorsement or recommendation of them.</li>
    </ul>
</div>


@endsection
@section('extern-js')

<script src="{{url('plugins\datatables\jquery.dataTables.min.js')}}"></script>
<script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('frontend_assets/custom_js/cart.js')}}"></script>
<script type="text/javascript"> $(document).ready(function(){
$(".small_img").hover (function(){
$(".big_img").attr('src', $(this).attr('src'));
});
});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#imgs').imagezoomsl({
			zoomrange:[3,3]
		});
	});
	function bigImg(obj){
		console.log(obj);
	}
</script>
@endsection
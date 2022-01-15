@extends('layout.app')
@section('content')

	<!-- Start: breadcrumbs -->
	<section class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2>Buyer FAQs</h2>
				<p>Home / Buyer FAQs</p>
			</div>
		</div>
		</div>
	</section>
	<!-- Start: breadcrumbs -->
		
	<!-- Start: Main Content -->
	<section class="content">
		<div class="container">
		    <div class="row">
		        <div class="col-md-12">
		            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading1">
		                        <h4 class="panel-title">
		                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
		                                Contacting Sellers Directly
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading	">
		                        <div class="panel-body">
		                            <p>We made the contact process at CollarWeb easier, a feature that had received positive feedback from our user base.</p>

		                            <p>Buyers can enter their message (just 2 fields) and a WorkStream between the Seller and the Buyer opens so that they can message each other directly. They also have the option to make that message private or post it as a Public Job. </p>

		                            <p>So wait no more, just visit our freelancer Listings and hire the Sellers that you want to work with!</p>
		                        </div>
		                    </div>
		                </div>
		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading2">
		                        <h4 class="panel-title">
		                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
		                                Voucher Discounts Codes FAQ
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
		                        <div class="panel-body">
		                            <p>This help page is for guidance on how promo/voucher codes work on the site.</p>
		                            <ul>
		                            	<li>The x% vouchers only give a discount on the deposit value NOT the invoice values. So if you would like to use a code that has been provided, please make sure that it is applied when you are paying for a deposit. When an invoice is raised, there will not be an option to enter the code. </li>
		                            	<li>The photo below shows where the code enter option is located. When you select to pay for a deposit, the option is available in the upper right-hand corner as shown in the red circle in the screenshot.</li>
		                            	<li>Promo codes cannot be added manually if they are not added in the initial deposit phase. They can, however, be used on the next job that you would like to use it for. </li>
		                            </ul>
		                        </div>
		                    </div>
		                </div>
		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading3">
		                        <h4 class="panel-title">
		                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
		                                Why have I stopped receiving instant email notifications for new Proposals?
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
		                        <div class="panel-body">
		                            <p>When a Seller sends you a proposal for your Job you will instantly receive their proposal in your CollarWeb Inbox.  Each day, for each open Job, you will also receive regular summaries by email of all the new proposals you have received. Depending on the volume and nature of proposals that you receive, you will receive at least one summary email notification per day. In addition you will also be notified immediately if any Seller has sent you a specially featured proposal to get your attention.</p>

		                            <p>Previously an email notification was sent for every new proposal received however this has been changed to summary notifications in response to request from many PPHers who didn't want their email inboxes filled with so many notifications.   If you need more instant visibility of proposals then you can check your CollarWeb inbox at anytime. </p>
		                        </div>
		                    </div>
		                </div>

		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading4">
		                        <h4 class="panel-title">
		                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
		                                Why are attached .docx and .xlsx files downloading as .zip files?
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
		                        <div class="panel-body">
		                            <p>Occasionally some users have trouble downloading .docx, .xlsx, .pptx and other Microsoft Office files that have been attached to a WorkStream. Users may experience an issue where the file is shown attached in the WorkStream as a .docx (Microsoft Word) or .xlsx (Microsoft Excel) file but appears to download as a .zip file that displays XML code or other seemingly meaningless text when opened.</p>

		                            <p>Don't worry! These files are actually still the correct file but for technical reasons they have been renamed as a .zip file.</p>
		                            <ul>
		                            	<li>You can either simply change the file extension in windows from a .zip too .docx (or as appropriate). Be sure to check that your system is set to show file extensions as these may be hidden if you can't see the .zip or .docx endings on file names.</li>
		                            	<li>Alternatively you open the downloaded file from within MS Word, Excel or PowerPoint. Load up the application you want to use and select open. Make sure you view 'All Files' and select the downloaded .zip file. It will look like a zip file and will give you a warning to only open trusted file types. Click OK and the file will load up correctly.</li>
		                            </ul>
		                        </div>
		                    </div>
		                </div>
		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading5">
		                        <h4 class="panel-title">
		                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
		                                What is my Collar Account and why does the amount in my Collar Account say approx?
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
		                        <div class="panel-body">
		                            <p>Your Collar Account is where all your available funds are shown. These are funds that are NOT tied to a Job or held in deposit.</p>

		                            <p>The total seen in your Collar Account will always be in your chosen currency. For example, if you have chosen GBP as your main currency, your total will be shown in GBP even if you have deposits in EUR or Dollars.</p>

		                            <p>The total is only an estimate made on current exchange rates for the other currencies you hold.</p>

		                            <p>This rate may not apply on the day you make a withdrawal, that's why we say ‘approx’.</p>

		                            <p>To see your currency breakdown, click on View Details or hover over the (?) symbol.</p>
		                        </div>
		                    </div>
		                </div>
		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading6">
		                        <h4 class="panel-title">
		                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
		                               How do I find people that are reliable and trusted?
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
		                        <div class="panel-body">
		                            <p>The best way to ensure you work well with someone is to simply try it. On Collar you can simply start working with someone for as little as as one hour and see how it goes. Not much can go wrong if all you’ve wasted is one hour.</p>

		                            <p>If you are committing to larger amount of work we recommend that you look at the Sellers profile and past reviews.</p>

		                            <p>We highly recommend you use the Escrow facility sensibly, only release funds when you get the work agreed for the Job or particular milestone you set with the Seller.</p>
		                        </div>
		                    </div>
		                </div>

		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading7">
		                        <h4 class="panel-title">
		                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapse7">
		                                What's the quickest way to get started?
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse7" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading7">
		                        <div class="panel-body">
		                            <p>The quickest way to get started is to buy an Hourlie. An Hourlie is like an ‘express job’ where you instantly hire someone to start working on the job they advertise in their listing. Because Hourlies are for smaller jobs it is like getting a ‘taster’ of the person before giving them a larger piece of work.    Once you are convinced that the Seller is delivering what you want you can very easily carry on working with that person. To arrange for follow on work all the Seller needs to do is send you a custom proposal in the same WorkStream.</p>

		                            <p>Alternatively you can simply post a Job and start getting custom proposals from freelancers from the start.</p>
		                        </div>
		                    </div>
		                </div>
		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading8">
		                        <h4 class="panel-title">
		                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
		                                How can I cancel a Job after I accepted the proposal?
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
		                        <div class="panel-body">
		                            <p>Most of the time, Jobs progress smoothly and as expected but we understand that occasionally circumstances can change and it may be necessary to cancel a Job.</p>

		                            <p>After accepting a proposal, you may request a cancellation but please ensure that you do the following:</p>
		                            <ul>
		                            	<li>You must notify the Seller of the cancellation by placing a message in the corresponding WorkStream.</li>
		                            	<li>Alternatively, if there are funds in the Escrow Account and you believe you are entitled to a refund (see Section 6.2 of our T&amp;Cs;) you can request a refund. This typically applies when:
		                            		<ul>
		                            			<li>the seller has not responded to a question in the WorkStream within 1 working day</li>
		                            			<li>the Seller has not completed work within agreed timescale</li>
		                            		</ul>
		                            	</li>
	                        			<li>in this case, you can notify the Seller of the cancellation by requesting a refund using the “Request Refund” action on the WorkStream.</li>
	                        			<li>if you (the Buyer) fails to notify the Seller in the WorkStream that you wish to cancel the Job and the Job is subsequently completed, you must pay for the service delivered in accordance with our terms and conditions.</li>
	                        			<li>You should should agree with the Seller in the WorkStream what payment is necessary for any work completed (or time spent, if it is a per hour Job).</li>
	                        		</ul>
		                        </div>
		                    </div>
		                </div>
		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading9">
		                        <h4 class="panel-title">
		                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
		                                How do I know that my money is secure?
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
		                        <div class="panel-body">
		                            <p>Once you accept a Proposal for a Job that you posted or bought an Hourlie, you will be required to make a payment. This payment does not get released to the Seller until the agreed Milestones have been met or the work is completed to your specifications. The money is a down-payment held as security in an Escrow account until you release the funds.</p>

		                            <p>If the work is not delivered or is not to your standard, you can reject the invoice. PeoplePerHour has an impartial and independent Meditation policy for Disputes (please bear in mind that you have 7 days to raise a dispute once an invoice has been raised otherwise the funds will be released automatically). </p>
	 
		                            <p>We encourage the two parties to resolve it between themselves and if no solution is found the money may be returned to the buyer unless the work has been proven to be delivered or hours have been approved by the Buyer in which cases payment may be released to the Seller.</p>
		                        </div>
		                    </div>
		                </div>

		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading10">
		                        <h4 class="panel-title">
		                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="true" aria-controls="collapse10">
		                                Why should I rate a Seller?
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
		                        <div class="panel-body">
		                            <p>Once a job has been completed, we encourage buyers to give sellers fair feedback. Feedback is important to everyone and it makes our community better and smarter. It gives sellers an incentive to produce top quality work and commends them for their work whilst holding them accountable to deliver.  </p>
		                        </div>
		                    </div>
		                </div>
		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading11">
		                        <h4 class="panel-title">
		                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
		                                Why have I received an automatic refund?
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
		                        <div class="panel-body">
		                            <p>If you receive a notification that your money in the Escrow account for a particular job is being automatically refunded to you, one of two things will have happened:</p>
		                            <ul>
		                            	<li>the funds are held as a deposit for a custom Job, and there hasn't been any activity in the WorkStream for a very long period of time (over 60 days) despite reminders to your Seller to post an update in the WorkStream. Because it appears the job has been cancelled or finished you have received a refund.</li>
		                            	<li>the funds are held after you purchased an Hourlie service, and the deadline for the Seller to deliver the service to you has long since passed (over 30 days). </li>  
	 	                            <p><strong>I shouldn't get a refund / I need to pay the Seller!</strong></p>

		                            <p>This automation is in place to prevent your funds being held indefinitely in Escrow accounts for jobs not delivered.  In all cases before any funds are automatically refunded your Seller will first receive notifications from us checking the status of the Job to make sure something hasn't gone astray.  The reminders ask the Seller to take action to confirm if you aren't due for a refund.</p>

		                            <p>If for some reason you Seller didn't see or take action on these reminders and the job is still in progress they can:</p>
		                            <ul>
		                            	<li>raise a new deposit request to you for the funds to be returned to the Escrow account as security, or</li>
		                            	<li>raise their invoice for payment as normal when the job has been completed.  You will be asked to pay the full amount (and you can re-use the funds refunded into your Collar wallet). </li>
		                            </ul>
		                        </ul></div>
		                    </div>
		                </div>
		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading12">
		                        <h4 class="panel-title">
		                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
		                                I have received an invoice but I am not happy with the work provided.
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
		                        <div class="panel-body">
		                            <p>If you have received an invoice from your Seller but the work has not been finished then reject the invoice from the WorkStream (see the drop down arrow on the invoice) and let your Seller know why you have rejected it so that they can get the job finished.  </p>

		                            <p>As part of the Rules of Engagement, payment is only made once a job has been finished including the Seller providing at least two iterations on the deliverables if you are not 100% satisfied at first.  Most Sellers on Collar will go out of their way to make sure that their Buyers are happy with the work delivered so just let them know what is missing.</p> 

		                            <p><strong>Am I entitled to a refund?</strong></p>

		                            <p>If you are not happy to continue working with the Seller then take a look at the refund policy to see whether you may be entitled to a refund of any money held in Escrow. </p> 

		                            <p>If the work has been delivered and the Seller has tried to make you 100% satisfied but the deliverables don't fully meet your taste (for example a logo design is not exactly what you had in mind) then you will not be entitled to a refund but you can indicate your opinion on their service by leaving feedback when you have paid their invoice. </p>
		                        </div>
		                    </div>
		                </div>

		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading13">
		                        <h4 class="panel-title">
		                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true" aria-controls="collapse13">
		                                Am I entitled to a refund?
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse13" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading13">
		                        <div class="panel-body">
		                            <p>If you aren't happy with the progress of a job then first raise your concerns with your Seller on your WorkStream. Most Sellers on Collar care a lot about delivering a great service to their Buyers not only so that they can get paid and earn great feedback but also because they want to earn follow on work with their happy Buyers. </p>
	 
		                            <p>The rule of thumb on Collar is that you pay for Job Done; if the job that was agreed (either as part of the proposal acceptance process or as defined in the Hourlie description) has not been delivered within the agreed timescales, then you don't need to pay and you are entitled to receive a refund of any money held in the Escrow account for the job.</p>
	 
		                            <p><strong>A few things to bear in mind:</strong></p>
		                            <ul>
		                            	<li>If the Seller has delivered the work that was agreed but you aren't happy with the work based on taste (for example, a logo design isn't quite what you had in mind) then the Seller is entitled to receive payment for the work as long as they have given you at least two further iterations to try and meet your needs (most Sellers will go even further to keep you happy).</li>

		                            	<li>If the Seller is late in delivering the work because they were held up awaiting instructions, materials or input from you then the Job cannot necessarily be regarded as late. We always encourage Buyers to provide the Seller with everything they need upfront as much as possible and be available to answer questions during the Job to progress things along.  If the timescales look like they are slipping unavoidably due to your own constraints then simply agree revised timescales with your Seller so that they know what they need to aim for.</li>
		                            	<li>If you have cancelled the job due to a change in your needs and the Seller has spent time working on the job then the Seller is entitled to ask for payment to cover their time; this may include the full deposit sum in Escrow.</li>
		                            </ul>
	 
									<p>See the <a href="terms-and-conditions.php">terms and conditions</a> in full.</p>
		                        </div>
		                    </div>
		                </div>
		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading14">
		                        <h4 class="panel-title">
		                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
		                                How do I request a refund?
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
		                        <div class="panel-body">
		                            <p>In Collar we understand that you may not be happy with the work provided from a freelancer.</p>
		                            <p>Before requesting a refund of the money held in the Escrow account a couple of things to check first:</p>
		                            <ul>
		                            	<li>if you aren't happy with the work the Seller has delivered make sure you have given them a chance to get the job back on track.  In the Rules of Engagement we ask all Buyers to allow Sellers at least two further iterations on any work delivered to get it right;</li>
		                            	<li>make sure you are entitled to a refund by checking out this FAQ.</li> 
		                            </ul>  
		                            <p>If you are entitled to a refund of the money held in the Escrow account then look for the "Request refund" button in the toolbar on the left hand side at the bottom of your WorkStream with your Seller and send them your request including the reason why you are requesting this refund.   Your Seller will then be notified and asked whether they accept your request.  If they don't respond to your request within 3 days OR if they reject your refund request Collar Customer Support will automatically be notified to take a look and provide help.</p>
		                        </div>
		                    </div>
		                </div>
		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading15">
		                        <h4 class="panel-title">
		                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="false" aria-controls="collapse15">
		                                I have already paid the Seller, how do I get a refund?
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
		                        <div class="panel-body">
		                            <p>On Collar you only pay for Job Done:  </p>
		                            <ul>
		                            	<li>for Hourlies or fixed price custom Jobs, Job Done is when the agreed deliverables have been provided and checked</li>
		                            	<li>for custom Jobs where you have agreed to pay for the Sellers time by the hour, Job Done is when the time has been spent by the Seller.  </li>
		                            </ul>

		                            <p>So that you don't have to pay any money to the Seller before Job Done we provide an Escrow account where funds can be held.  <strong>Only pay your Sellers invoice and release funds from Escrow when you are happy that the job has finished (Job Done)</strong>.</p>

		                            <p>Unfortunately if you have mistakenly paid money out to the Seller before the work has finished, or if you are no longer happy with the work that was delivered you will not be able to follow the standard steps to request a refund, and receive Dispute assistance from Collar if the Seller refuses to refund you, because the funds are no longer held in Escrow by Collar.  </p>

		                            <p>However we recommend that you contact your Seller on the WorkStream to explain why you are seeking a refund.  In many cases Sellers will look to work with you to resolve the issues and may even agree to a refund if they can't.</p>
		                        </div>
		                    </div>
		                </div>

		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading16">
		                        <h4 class="panel-title">
		                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true" aria-controls="collapse16">
		                                I am not happy with the work delivered but you released my money, what can I do?
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse16" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading16">
		                        <div class="panel-body">
		                            <p>When you agree to work with Sellers on Collar your money is protected in Escrow until you are happy that the work has been delivered. You confirm payment to the Seller when you receive their invoice. Equally if you are not happy with the work delivered you can reject the Seller's invoice and let them know what needs finishing before you are happy to pay.</p>  
		                            <p>All invoices should be paid within 7 days in accordance with Collar terms and conditions. If you don't take action on a Seller's invoice within this timeframe then some automatic actions will be taken so that the Seller does not go unpaid for work delivered, as follows:</p>

		                            <p><srrong>1. Invoice reminders</srrong></p>
		                            <p>After the initial email notification of an invoice from your Seller you will automatically receive at least one further email reminder (for Hourlies) or multiple email reminders (for larger custom Jobs) to take action on the invoice (pay or reject), if you haven't already.  </p>

		                            <p><strong>2. Automatic release of money in Escrow (and your Collar wallet)</strong></p>
		                            <p>If after these reminders the invoice remains unpaid, and you have not rejected it, then the money held in the Escrow account up to the invoiced amount will be automatically released to the Seller as payment.  If there is not sufficient money held in the Escrow account then funds from your Collar wallet to cover any missing amounts will also be released to the Seller.</p>
		                            <p>For Hourlies, which are express jobs delivered in just a few days, this automatic payment will happen 7 days after the invoice has been raised; for larger custom Jobs Buyers are given a longer grace period of 30 days before money is automatically released as payment.</p>

		                            <p><strong>3. What to do if you are not happy with the work delivered</strong></p>
		                            <p>If you have not acted on the invoice and reminders and find that your money has therefore been released automatically to the Seller before you are happy with the work delivered then:Get in touch with the Seller on the WorkStream to let them know what work you feel is outstanding.  Most Sellers will happily make further amendments even after they have received payment; they want to keep you happy and hopefully agree with you follow on work.  Plus they want to get the all important good feedback from you.</p>
		                        </div>
		                    </div>
		                </div>
		                <div class="panel panel-default">
		                    <div class="panel-heading" role="tab" id="heading17">
		                        <h4 class="panel-title">
		                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="false" aria-controls="collapse17">
		                                I've lost a Dispute with my Seller, what should I do now?
		                            </a>
		                        </h4>
		                    </div>
		                    <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
		                        <div class="panel-body">
		                            <p>After a Dispute decision has been made, our Collar Dispute Team will leave a message in your WorkStream to let you know the outcome and why that resolution decision was made.</p>
		                            <p>Resolution decisions are made very carefully; using all the evidence available in the WorkStream, Collar Dispute Team look to identify a fair decision based on the status of the Job. More information on how Collar Dispute Team resolve disputes can be found here. If you have any further questions on the resolution decision then <a href="#">contact us</a>. </p>
		                            <p>If there is enough money in Escrow to cover the payment required for the Seller as per the outcome of the Dispute, then those funds will be automatically paid to the Seller. Any additional money remaining in Escrow for the Job will be automatically refunded back to you.</p>
		                            <p>If the funds in Escrow for the Job are not enough to cover the outstanding payment for the Seller then you will be asked to complete the payment by going to your WorkStream and following the instructions to pay. Payments should be made within 7 days from the date of the dispute decision.</p>
		                        </div>
		                    </div>
		                </div>

		            </div>
		        </div>
		    </div>
		</div>
		<!--container--> 
	</section>
	<!-- End: Main Content -->

@endsection
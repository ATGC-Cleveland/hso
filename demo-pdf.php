<?php
/**
 * Template Name: PDF Demo
 *
 * @package WordPress
 * @subpackage HSO
 * @since HSO 0.0.1
 */

use ZendPdf\PdfDocument;
use ZendPdf\Font;

$pdf = PdfDocument::load('/Users/thingwone/Sites/healthspotohio/wp-content/plugins/champ-lite4hiv/docs/ew_2014v2_part1.pdf');
//var_dump($pdf->pages);

$ew_form = $pdf->pages[0];

//var_dump($ew_form);

$font = Font::fontWithName(Font::FONT_HELVETICA_BOLD);
  
// Apply font
$ew_form->setFont($font, 11);


$ew_form->drawText('AOH56745', 150, 707);	// Client ID
$ew_form->drawText('07/04/2014' , 130 , 686 );	// Session Date
$ew_form->drawText('ATGC/AHF' , 100 , 595 );	// Agency Name
$ew_form->drawText('00389' , 100 , 572 );	// Agency ID
$ew_form->drawText('Interbelt Nite Club' , 100 , 549 );	// Site Name
$ew_form->drawText('00389' , 100 , 527 );	// Site ID

// Client Information

$ew_form->drawText('08/27/1981' , 125 , 433 );	// Date of Birth
$ew_form->drawText('Ohio' , 90 , 411 );	// State
$ew_form->drawText('Cuyahoga' , 175 , 392 );	// County
$ew_form->drawText('44130' , 130 , 368 );	// Zip

// Selections

$ew_form->setFont($font, 8);

// Ethnicity

$ew_form->drawText('X' , 40 , 331 );	// Hispanic or Latino
$ew_form->drawText('X' , 40 , 323 );	// Not Hispanic or Latino
$ew_form->drawText('X' , 170 , 335 );	// Don't Know
$ew_form->drawText('X' , 170 , 327 );	// Declined
$ew_form->drawText('X' , 170 , 319 );	// Not Asked

// Race

$ew_form->drawText('X' , 40 , 287 );	// American IN/AK Native
$ew_form->drawText('X' , 40 , 279 );	// Asian
$ew_form->drawText('X' , 40 , 271 );	// Black/African American
$ew_form->drawText('X' , 40 , 263 );	// Native HI/Pac. Islander
$ew_form->drawText('X' , 170 , 287 );	// White
$ew_form->drawText('X' , 170 , 279 );	// Don't Know
$ew_form->drawText('X' , 170 , 271 );	// Declined
$ew_form->drawText('X' , 170 , 263 );	// Not Asked

// Sex

$ew_form->drawText('X' , 40 , 235 );	// Male
$ew_form->drawText('X' , 40 , 226 );	// Female
$ew_form->drawText('X' , 170 , 235 );	// Declined
$ew_form->drawText('X' , 170 , 226 );	// Not Asked

// Gender

$ew_form->drawText('X' , 40 , 198 );	// Male
$ew_form->drawText('X' , 40 , 190 );	// Female
$ew_form->drawText('X' , 40 , 182 );	// Declined
$ew_form->drawText('X' , 40 , 173 );	// Not Asked
$ew_form->drawText('X' , 40 , 157.5 );	// Additional

$ew_form->drawText('Something Else' , 120 , 157.5 );	// Additional Detail

$ew_form->drawText('X' , 170 , 197 );	// Transgender MTF
$ew_form->drawText('X' , 170 , 189 );	// Transgender FTM
$ew_form->drawText('X' , 170 , 181 );	// Transgender Unspecified

// Previous HIV Test

$ew_form->drawText('X' , 40 , 125.5 );	// No
$ew_form->drawText('X' , 40 , 105.5 );	// Yes
$ew_form->drawText('X' , 40 , 82 );	// Don't Know
$ew_form->drawText('X' , 40 , 74 );	// Declined
$ew_form->drawText('X' , 40 , 66 );	// Not Asked

// Self-Reported Result

$ew_form->drawText('X' , 100.75 , 86 );	// Positive
$ew_form->drawText('X' , 100.75 , 78 );	// Negative
$ew_form->drawText('X' , 100.75 , 70 );	// Preliminary Positive
$ew_form->drawText('X' , 100.75 , 62 );	// Indeterminate
$ew_form->drawText('X' , 192 , 82 );	// Don't Know
$ew_form->drawText('X' , 192 , 74 );	// Declined
$ew_form->drawText('X' , 192 , 66 );	// Not Asked

// Test Session

$ew_form->setFont($font, 11);

// Test 1

$ew_form->drawText( '07/04/2014' , 350 , 705 );	// Sample Date
$ew_form->drawText( '5' , 340 , 669 );	// Worker ID.1
$ew_form->drawText( '1' , 350 , 669 );	// Worker ID.2
$ew_form->drawText( '6' , 360 , 669 );	// Worker ID.3
$ew_form->drawText( '2' , 370 , 669 );	// Worker ID.4

$ew_form->setFont($font, 8);

// Test Election

$ew_form->drawText( 'X' , 341 , 652.5 );	// Anonymously
$ew_form->drawText( 'X' , 341 , 644.75 );	// Confidentially
$ew_form->drawText( 'X' , 341 , 636.5 );	// Test Not Offered
$ew_form->drawText( 'X' , 341 , 628.75 );	// Declined Testing

// Test Technology

$ew_form->drawText( 'X' , 341 , 614.75 );	// Conventional
$ew_form->drawText( 'X' , 341 , 606.5 );	// Rapid
$ew_form->drawText( 'X' , 341 , 598.5 );	// NAAT/RNA Testing
$ew_form->drawText( 'X' , 341 , 590.5 );	// Other

// Test Result

$ew_form->drawText( 'X' , 341 , 576.5 );	// Positive/Reactive
$ew_form->drawText( 'X' , 341 , 568.25 );	// Negative
$ew_form->drawText( 'X' , 341 , 560 );	// Indeterminate
$ew_form->drawText( 'X' , 341 , 552 );	// Invalid
$ew_form->drawText( 'X' , 341 , 544.25 );	// No Result

// Result Provided

$ew_form->drawText( 'X' , 341 , 529 );	// No
$ew_form->drawText( 'X' , 341 , 520.5 );	// Yes
$ew_form->drawText( 'X' , 341 , 512.75 );	// Yes, Other Agency

// If No, Reason

$ew_form->drawText( 'X' , 341 , 480.5 );	// Declined Notification
$ew_form->drawText( 'X' , 341 , 466.25 );	// Did Not Return
$ew_form->drawText( 'X' , 341 , 452 );	// Other


$ew_form->setFont($font, 11);


// Test 2

$ew_form->drawText( '07/04/2014' , 430 , 705 );	// Sample Date
$ew_form->drawText( '5' , 420 , 669 );	// Worker ID.1
$ew_form->drawText( '1' , 430 , 669 );	// Worker ID.2
$ew_form->drawText( '6' , 440 , 669 );	// Worker ID.3
$ew_form->drawText( '2' , 450 , 669 );	// Worker ID.4

$ew_form->setFont($font, 8);

// Test Election

$ew_form->drawText( 'X' , 420.75 , 652.5 );	// Anonymously
$ew_form->drawText( 'X' , 420.75 , 644.75 );	// Confidentially
$ew_form->drawText( 'X' , 420.75 , 636.5 );	// Test Not Offered
$ew_form->drawText( 'X' , 420.75 , 628.75 );	// Declined Testing

// Test Technology

$ew_form->drawText( 'X' , 420.75 , 614.75 );	// Conventional
$ew_form->drawText( 'X' , 420.75 , 606.5 );	// Rapid
$ew_form->drawText( 'X' , 420.75 , 598.5 );	// NAAT/RNA Testing
$ew_form->drawText( 'X' , 420.75 , 590.5 );	// Other

// Test Result

$ew_form->drawText( 'X' , 420.75 , 576.5 );	// Positive/Reactive
$ew_form->drawText( 'X' , 420.75 , 568.25 );	// Negative
$ew_form->drawText( 'X' , 420.75 , 560 );	// Indeterminate
$ew_form->drawText( 'X' , 420.75 , 552 );	// Invalid
$ew_form->drawText( 'X' , 420.75 , 544.25 );	// No Result

// Result Provided

$ew_form->drawText( 'X' , 420.75 , 529 );	// No
$ew_form->drawText( 'X' , 420.75 , 520.5 );	// Yes
$ew_form->drawText( 'X' , 420.75 , 512.75 );	// Yes, Other Agency

// If No, Reason

$ew_form->drawText( 'X' , 420.75 , 480.5 );	// Declined Notification
$ew_form->drawText( 'X' , 420.75 , 466.25 );	// Did Not Return
$ew_form->drawText( 'X' , 420.75 , 452 );	// Other


$ew_form->setFont($font, 11);

// Test 3

$ew_form->drawText( '07/04/2014' , 510 , 705 );	// Sample Date
$ew_form->drawText( '5' , 500 , 669 );	// Worker ID.1
$ew_form->drawText( '1' , 510 , 669 );	// Worker ID.2
$ew_form->drawText( '6' , 520 , 669 );	// Worker ID.3
$ew_form->drawText( '2' , 530 , 669 );	// Worker ID.4

$ew_form->setFont($font, 8);

// Test Election

$ew_form->drawText( 'X' , 500.5 , 652.5 );	// Anonymously
$ew_form->drawText( 'X' , 500.5 , 644.75 );	// Confidentially
$ew_form->drawText( 'X' , 500.5 , 636.5 );	// Test Not Offered
$ew_form->drawText( 'X' , 500.5 , 628.75 );	// Declined Testing

// Test Technology

$ew_form->drawText( 'X' , 500.5 , 614.75 );	// Conventional
$ew_form->drawText( 'X' , 500.5 , 606.5 );	// Rapid
$ew_form->drawText( 'X' , 500.5 , 598.5 );	// NAAT/RNA Testing
$ew_form->drawText( 'X' , 500.5 , 590.5 );	// Other

// Test Result

$ew_form->drawText( 'X' , 500.5 , 576.5 );	// Positive/Reactive
$ew_form->drawText( 'X' , 500.5 , 568.25 );	// Negative
$ew_form->drawText( 'X' , 500.5 , 560 );	// Indeterminate
$ew_form->drawText( 'X' , 500.5 , 552 );	// Invalid
$ew_form->drawText( 'X' , 500.5 , 544.25 );	// No Result

// Result Provided

$ew_form->drawText( 'X' , 500.5 , 529 );	// No
$ew_form->drawText( 'X' , 500.5 , 520.5 );	// Yes
$ew_form->drawText( 'X' , 500.5 , 512.75 );	// Yes, Other Agency

// If No, Reason

$ew_form->drawText( 'X' , 500.5 , 480.5 );	// Declined Notification
$ew_form->drawText( 'X' , 500.5 , 466.25 );	// Did Not Return
$ew_form->drawText( 'X' , 500.5 , 452 );	// Other


// Risk Profile

// Collection

$ew_form->drawText( 'X' , 267.25 , 420 );	// Completed
$ew_form->drawText( 'X' , 267.25 , 412.5 );	// Not Asked
$ew_form->drawText( 'X' , 429.5 , 419.75 );	// No Risk
$ew_form->drawText( 'X' , 429.5 , 405.5 );	// Declined

// Risk Assessment

// No

$ew_form->drawEllipse( 445 , 344 , 459 , 350 );	// Vaginal or Anal sex with a male
$ew_form->drawEllipse( 445 , 332 , 459 , 338 );	// Vaginal or Anal sex with a male without a condom
$ew_form->drawEllipse( 445 , 320 , 459 , 326 );	// Vaginal or Anal sex with a male who is IDU
$ew_form->drawEllipse( 445 , 307 , 459 , 313 );	// Vaginal or Anal sex with a female who is HIV+

$ew_form->drawEllipse( 445 , 294 , 459 , 300 );	// Vaginal or Anal sex with a female
$ew_form->drawEllipse( 445.25 , 282 , 459.25 , 288 );	// Vaginal or Anal sex with a female without a condom
$ew_form->drawEllipse( 445.25 , 269 , 459.25 , 275 );	// Vaginal or Anal sex with a female who is IDU
$ew_form->drawEllipse( 445.25 , 257 , 459.25 , 263 );	// Vaginal or Anal sex with a female who is HIV+

$ew_form->drawEllipse( 445.25 , 244.75 , 459.25 , 250.75 );	// Vaginal or Anal sex with a transgender person
$ew_form->drawEllipse( 445.25 , 232.75 , 459.25 , 238.75 );	// Vaginal or Anal sex with a transgender without a condom
$ew_form->drawEllipse( 445 , 220 , 459 , 226 );	// Vaginal or Anal sex with a transgender who is an IDU
$ew_form->drawEllipse( 445.25 , 207 , 459.25 , 213 );	// Vaginal or Anal sex with a transgender who is an HIV+

$ew_form->drawEllipse( 445.5 , 194 , 459.5 , 200 );	// Injection Drug Use
$ew_form->drawEllipse( 445 , 182 , 459 , 188 );	// Shared Drug Equipment

$ew_form->drawEllipse( 445.5 , 169.75 , 459.5 , 175.75 );	// Vaginal or Anal sex with an MSM

// Yes

$ew_form->drawEllipse( 493 , 344 , 507 , 350 );	// Vaginal or Anal sex with a male
$ew_form->drawEllipse( 493 , 332 , 507 , 338 );	// Vaginal or Anal sex with a male without a condom
$ew_form->drawEllipse( 493 , 320 , 507 , 326 );	// Vaginal or Anal sex with a male who is IDU
$ew_form->drawEllipse( 493 , 307 , 507 , 313 );	// Vaginal or Anal sex with a female who is HIV+

$ew_form->drawEllipse( 493 , 294 , 507 , 300 );	// Vaginal or Anal sex with a female
$ew_form->drawEllipse( 493.25 , 282 , 507.25 , 288 );	// Vaginal or Anal sex with a female without a condom
$ew_form->drawEllipse( 493.25 , 269 , 507.25 , 275 );	// Vaginal or Anal sex with a female who is IDU
$ew_form->drawEllipse( 493.25 , 257 , 507.25 , 263 );	// Vaginal or Anal sex with a female who is HIV+

$ew_form->drawEllipse( 493.25 , 244.75 , 507.25 , 250.75 );	// Vaginal or Anal sex with a transgender person
$ew_form->drawEllipse( 493.25 , 232.75 , 507.25 , 238.75 );	// Vaginal or Anal sex with a transgender without a condom
$ew_form->drawEllipse( 493 , 220 , 507 , 226 );	// Vaginal or Anal sex with a transgender who is an IDU
$ew_form->drawEllipse( 493.25 , 207 , 507.25 , 213 );	// Vaginal or Anal sex with a transgender who is an HIV+

$ew_form->drawEllipse( 493.5 , 194 , 507.5 , 200 );	// Injection Drug Use
$ew_form->drawEllipse( 493 , 182 , 507 , 188 );	// Shared Drug Equipment

$ew_form->drawEllipse( 493.5 , 169.75 , 507.5 , 175.75 );	// Vaginal or Anal sex with an MSM

// Don't Know

$ew_form->drawEllipse( 540 , 344 , 554 , 350 );	// Vaginal or Anal sex with a male
$ew_form->drawEllipse( 540 , 332 , 554 , 338 );	// Vaginal or Anal sex with a male without a condom
$ew_form->drawEllipse( 540 , 320 , 554 , 326 );	// Vaginal or Anal sex with a male who is IDU
$ew_form->drawEllipse( 540 , 307 , 554 , 313 );	// Vaginal or Anal sex with a female who is HIV+

$ew_form->drawEllipse( 540 , 294 , 554 , 300 );	// Vaginal or Anal sex with a female
$ew_form->drawEllipse( 540.25 , 282 , 554.25 , 288 );	// Vaginal or Anal sex with a female without a condom
$ew_form->drawEllipse( 540.25 , 269 , 554.25 , 275 );	// Vaginal or Anal sex with a female who is IDU
$ew_form->drawEllipse( 540.25 , 257 , 554.25 , 263 );	// Vaginal or Anal sex with a female who is HIV+

$ew_form->drawEllipse( 540.25 , 244.75 , 554.25 , 250.75 );	// Vaginal or Anal sex with a transgender person
$ew_form->drawEllipse( 540.25 , 232.75 , 554.25 , 238.75 );	// Vaginal or Anal sex with a transgender without a condom
$ew_form->drawEllipse( 540 , 220 , 554 , 226 );	// Vaginal or Anal sex with a transgender who is an IDU
$ew_form->drawEllipse( 540.25 , 207 , 554.25 , 213 );	// Vaginal or Anal sex with a transgender who is an HIV+

$ew_form->drawEllipse( 540.5 , 194 , 554.5 , 200 );	// Injection Drug Use
$ew_form->drawEllipse( 540 , 182 , 554 , 188 );	// Shared Drug Equipment

$ew_form->drawEllipse( 540.5 , 169.75 , 554.5 , 175.75 );	// Vaginal or Anal sex with an MSM

// Additional Risk Factors

$ew_form->setFont($font, 11);

$ew_form->drawText( '01' , 419 , 148.5 );	// RF.1
$ew_form->drawText( '02' , 463 , 148.5 );	// RF.2
$ew_form->drawText( '03' , 510 , 148.5 );	// RF.3
$ew_form->drawText( '04' , 556 , 148.5 );	// RF.4

$data = $pdf->render();
// instruct browser to download the PDF
header("Content-Type: application/pdf");
header("Content-Disposition: inline; filename=opscan-". date("Y-m-d-H-i") . ".pdf");
header('Content-Transfer-Encoding: binary');
header("Cache-Control: no-cache, must-revalidate");


// output the PDF
echo $data;

?>
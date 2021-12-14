<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * //@Route("/conference", name="conference")
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        /*return $this->render('conference/index.html.twig', [
            'controller_name' => 'ConferenceController',
        ]);*/
        return new Response(<<<EOF
<!DOCTYPE>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <title>Git max3w</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <div align="center">
  <h1>Git prodaction</h1>
  <p>
  <svg id="eY8vjRMuiwN1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="72 0 500 450" shape-rendering="geometricPrecision" text-rendering="geometricPrecision"><style>#eY8vjRMuiwN1{pointer-events: all}#eY8vjRMuiwN1 * {animation-play-state: paused !important}#eY8vjRMuiwN1:hover * {animation-play-state: running !important}#eY8vjRMuiwN3_to {animation: eY8vjRMuiwN3_to__to 6000ms linear infinite normal forwards}@keyframes eY8vjRMuiwN3_to__to { 0% {transform: translate(324.379686px,265.992198px)} 16.666667% {transform: translate(324.379686px,265.992198px);animation-timing-function: cubic-bezier(0.17,0.01,0.185,1.005)} 58.333333% {transform: translate(324.379686px,374.776807px);animation-timing-function: cubic-bezier(0.42,0,0.58,1)} 87.5% {transform: translate(324.379686px,265.992198px)} 100% {transform: translate(324.379686px,265.992198px)}} #eY8vjRMuiwN7 {animation-name: eY8vjRMuiwN7__m, eY8vjRMuiwN7_f_p;animation-duration: 6000ms;animation-fill-mode: forwards;animation-timing-function: linear;animation-direction: normal;animation-iteration-count: infinite;}@keyframes eY8vjRMuiwN7__m { 0% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,459.381084L202,368.833L240.682388,294.129566L353.424581,239.003349')} 5% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,443.570495L202,368.833L247.415593,296.328426L353.424581,239.003349')} 10% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,459.381084L202,368.833L240.682388,294.129566L353.424581,239.003349')} 16.666667% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,443.570495L202,368.833L247.415593,296.328426L353.424581,239.003349')} 25% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,459.381084L202,368.833L240.682388,294.129566L353.424581,239.003349')} 41.666667% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,443.570495L202,368.833L247.415593,296.328426L353.424581,239.003349')} 50% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,443.570495L202,368.833L247.415593,296.328426L353.424581,239.003349')} 58.333333% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,459.381084L202,368.833L240.682388,294.129566L353.424581,239.003349')} 60% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,443.570495L202,368.833L247.415593,296.328426L353.424581,239.003349')} 62.5% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,459.381084L202,368.833L240.682388,294.129566L353.424581,239.003349')} 64.166667% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,443.570495L202,368.833L247.415593,296.328426L353.424581,239.003349')} 66.666667% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,459.381084L202,368.833L240.682388,294.129566L353.424581,239.003349')} 68.333333% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,443.570495L202,368.833L247.415593,296.328426L353.424581,239.003349')} 70.833333% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,459.381084L202,368.833L240.682388,294.129566L353.424581,239.003349')} 72.5% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,443.570495L202,368.833L247.415593,296.328426L353.424581,239.003349')} 75% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,459.381084L202,368.833L240.682388,294.129566L353.424581,239.003349')} 76.666667% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,443.570495L202,368.833L247.415593,296.328426L353.424581,239.003349')} 79.166667% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,459.381084L202,368.833L240.682388,294.129566L353.424581,239.003349')} 80.833333% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,443.570495L202,368.833L247.415593,296.328426L353.424581,239.003349')} 83.333333% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,459.381084L202,368.833L240.682388,294.129566L353.424581,239.003349')} 85% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,443.570495L202,368.833L247.415593,296.328426L353.424581,239.003349')} 87.5% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,459.381084L202,368.833L240.682388,294.129566L353.424581,239.003349')} 94.166667% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,443.570495L202,368.833L247.415593,296.328426L353.424581,239.003349')} 100% {d: path('M353.424581,239.003349L400.5,385.833L172.395478,459.381084L202,368.833L240.682388,294.129566L353.424581,239.003349')}}@keyframes eY8vjRMuiwN7_f_p { 0% {fill: url(#eY8vjRMuiwN7-fill)} 5% {fill: url(#eY8vjRMuiwN7-fill-g1)} 100% {fill: url(#eY8vjRMuiwN7-fill-g1)}} #eY8vjRMuiwN8 {animation-name: eY8vjRMuiwN8__m, eY8vjRMuiwN8_f_p;animation-duration: 6000ms;animation-fill-mode: forwards;animation-timing-function: linear;animation-direction: normal;animation-iteration-count: infinite;}@keyframes eY8vjRMuiwN8__m { 0% {d: path('M321.220664,138.624761L240.682388,294.129566L353.424581,239.003349L321.220664,138.624761Z')} 5% {d: path('M322.837144,218.832951L247.415593,296.328426L353.599986,239.044326L322.837144,218.832951Z')} 10% {d: path('M321.220664,138.624761L240.682388,294.129566L353.424581,239.003349L321.220664,138.624761Z')} 16.666667% {d: path('M330.793062,211.128178L247.415593,296.328426L353.424581,239.003349L330.793062,211.128178Z')} 25% {d: path('M321.220664,138.624761L240.682388,294.129566L353.424581,239.003349L321.220664,138.624761Z')} 41.666667% {d: path('M321.220664,138.624761L247.415593,296.328426L353.424581,239.003349L321.220664,138.624761Z')} 50% {d: path('M330.793062,211.128178L247.415593,296.328426L353.424581,239.003349L330.793062,211.128178Z')} 58.333333% {d: path('M321.220664,138.624761L240.682388,294.129566L353.424581,239.003349L321.220664,138.624761Z')} 60% {d: path('M330.793062,211.128178L247.415593,296.328426L353.424581,239.003349L330.793062,211.128178Z')} 62.5% {d: path('M321.220664,138.624761L240.682388,294.129566L353.424581,239.003349L321.220664,138.624761Z')} 64.166667% {d: path('M330.793062,211.128178L247.415593,296.328426L353.424581,239.003349L330.793062,211.128178Z')} 66.666667% {d: path('M321.220664,138.624761L240.682388,294.129566L353.424581,239.003349L321.220664,138.624761Z')} 68.333333% {d: path('M330.793062,211.128178L247.415593,296.328426L353.424581,239.003349L330.793062,211.128178Z')} 70.833333% {d: path('M321.220664,138.624761L240.682388,294.129566L353.424581,239.003349L321.220664,138.624761Z')} 72.5% {d: path('M330.793062,211.128178L247.415593,296.328426L353.424581,239.003349L330.793062,211.128178Z')} 75% {d: path('M321.220664,138.624761L240.682388,294.129566L353.424581,239.003349L321.220664,138.624761Z')} 76.666667% {d: path('M330.793062,211.128178L247.415593,296.328426L353.424581,239.003349L330.793062,211.128178Z')} 79.166667% {d: path('M321.220664,138.624761L240.682388,294.129566L353.424581,239.003349L321.220664,138.624761Z')} 80.833333% {d: path('M330.793062,211.128178L247.415593,296.328426L353.424581,239.003349L330.793062,211.128178Z')} 83.333333% {d: path('M321.220664,138.624761L240.682388,294.129566L353.424581,239.003349L321.220664,138.624761Z')} 85% {d: path('M330.793062,211.128178L247.415593,296.328426L353.424581,239.003349L330.793062,211.128178Z')} 87.5% {d: path('M321.220664,138.624761L240.682388,294.129566L353.424581,239.003349L321.220664,138.624761Z')} 94.166667% {d: path('M330.793062,211.128178L247.415593,296.328426L353.424581,239.003349L330.793062,211.128178Z')} 100% {d: path('M321.220664,138.624761L240.682388,294.129566L353.424581,239.003349L321.220664,138.624761Z')}}@keyframes eY8vjRMuiwN8_f_p { 0% {fill: url(#eY8vjRMuiwN8-fill)} 5% {fill: url(#eY8vjRMuiwN8-fill-g1)} 10% {fill: url(#eY8vjRMuiwN8-fill-g2)} 16.666667% {fill: url(#eY8vjRMuiwN8-fill-g3)} 25% {fill: url(#eY8vjRMuiwN8-fill-g4)} 41.666667% {fill: url(#eY8vjRMuiwN8-fill-g4)} 50% {fill: url(#eY8vjRMuiwN8-fill-g5)} 58.333333% {fill: url(#eY8vjRMuiwN8-fill-g6)} 60% {fill: url(#eY8vjRMuiwN8-fill-g7)} 62.5% {fill: url(#eY8vjRMuiwN8-fill-g8)} 64.166667% {fill: url(#eY8vjRMuiwN8-fill-g9)} 66.666667% {fill: url(#eY8vjRMuiwN8-fill-g10)} 68.333333% {fill: url(#eY8vjRMuiwN8-fill-g11)} 70.833333% {fill: url(#eY8vjRMuiwN8-fill-g12)} 72.5% {fill: url(#eY8vjRMuiwN8-fill-g13)} 75% {fill: url(#eY8vjRMuiwN8-fill-g14)} 76.666667% {fill: url(#eY8vjRMuiwN8-fill-g15)} 79.166667% {fill: url(#eY8vjRMuiwN8-fill-g16)} 80.833333% {fill: url(#eY8vjRMuiwN8-fill-g17)} 83.333333% {fill: url(#eY8vjRMuiwN8-fill-g18)} 85% {fill: url(#eY8vjRMuiwN8-fill-g19)} 87.5% {fill: url(#eY8vjRMuiwN8-fill-g20)} 94.166667% {fill: url(#eY8vjRMuiwN8-fill-g21)} 100% {fill: url(#eY8vjRMuiwN8-fill-g22)}} #eY8vjRMuiwN8-fill-g4-0 {animation: eY8vjRMuiwN8-fill-g4-0__c 6000ms linear infinite normal forwards}@keyframes eY8vjRMuiwN8-fill-g4-0__c { 0% {stop-color: rgb(75,134,248)} 25% {stop-color: rgb(75,134,248)} 41.666667% {stop-color: rgb(75,134,248)} 100% {stop-color: rgb(75,134,248)}} #eY8vjRMuiwN8-fill-g4-1 {animation: eY8vjRMuiwN8-fill-g4-1__c 6000ms linear infinite normal forwards}@keyframes eY8vjRMuiwN8-fill-g4-1__c { 0% {stop-color: rgb(66,213,251)} 25% {stop-color: rgb(66,213,251)} 41.666667% {stop-color: rgb(66,213,251)} 100% {stop-color: rgb(66,213,251)}} #eY8vjRMuiwN9 {animation: eY8vjRMuiwN9__m 6000ms linear infinite normal forwards}@keyframes eY8vjRMuiwN9__m { 0% {d: path('M202,368.833L104,552.333L193,535.833L202,368.833')} 5% {d: path('M202,368.833L114.450271,537.297199L194.672022,507.506445L202,368.833')} 10% {d: path('M202,368.833L104,552.333L193,535.833L202,368.833')} 16.666667% {d: path('M202,368.833L114.450271,537.297199L194.672022,507.506445L202,368.833')} 25% {d: path('M202,368.833L104,552.333L193,535.833L202,368.833')} 41.666667% {d: path('M202,368.833L104,552.333L193,535.833L202,368.833')} 50% {d: path('M202,368.833L104,552.333L179.032638,526.739659L202,368.833')} 58.333333% {d: path('M202,368.833L104,552.333L193,535.833L202,368.833')} 60% {d: path('M202,368.833L104,552.333L179.032638,526.739659L202,368.833')} 62.5% {d: path('M202,368.833L104,552.333L193,535.833L202,368.833')} 64.166667% {d: path('M202,368.833L104,552.333L179.032638,526.739659L202,368.833')} 66.666667% {d: path('M202,368.833L104,552.333L193,535.833L202,368.833')} 68.333333% {d: path('M202,368.833L104,552.333L179.032638,526.739659L202,368.833')} 70.833333% {d: path('M202,368.833L104,552.333L193,535.833L202,368.833')} 72.5% {d: path('M202,368.833L104,552.333L179.032638,526.739659L202,368.833')} 75% {d: path('M202,368.833L104,552.333L193,535.833L202,368.833')} 76.666667% {d: path('M202,368.833L104,552.333L179.032638,526.739659L202,368.833')} 79.166667% {d: path('M202,368.833L104,552.333L193,535.833L202,368.833')} 80.833333% {d: path('M202,368.833L104,552.333L179.032638,526.739659L202,368.833')} 83.333333% {d: path('M202,368.833L104,552.333L193,535.833L202,368.833')} 85% {d: path('M202,368.833L104,552.333L179.032638,526.739659L202,368.833')} 87.5% {d: path('M202,368.833L104,552.333L193,535.833L202,368.833')} 94.166667% {d: path('M202,368.833L104,552.333L179.032638,526.739659L202,368.833')} 100% {d: path('M202,368.833L104,552.333L193,535.833L202,368.833')}} #eY8vjRMuiwN9_tr {animation: eY8vjRMuiwN9_tr__tr 6000ms linear infinite normal forwards}@keyframes eY8vjRMuiwN9_tr__tr { 0% {transform: translate(202px,368.833px) rotate(0deg)} 5% {transform: translate(202px,368.833px) rotate(9.28425deg)} 10% {transform: translate(202px,368.833px) rotate(0deg)} 16.666667% {transform: translate(202px,368.833px) rotate(9.28425deg)} 25% {transform: translate(202px,368.833px) rotate(0deg)} 41.666667% {transform: translate(202px,368.833px) rotate(0deg)} 50% {transform: translate(202px,368.833px) rotate(9.28425deg)} 58.333333% {transform: translate(202px,368.833px) rotate(0deg)} 60% {transform: translate(202px,368.833px) rotate(9.28425deg)} 62.5% {transform: translate(202px,368.833px) rotate(0deg)} 64.166667% {transform: translate(202px,368.833px) rotate(9.28425deg)} 66.666667% {transform: translate(202px,368.833px) rotate(0deg)} 68.333333% {transform: translate(202px,368.833px) rotate(9.28425deg)} 70.833333% {transform: translate(202px,368.833px) rotate(0deg)} 72.5% {transform: translate(202px,368.833px) rotate(9.28425deg)} 75% {transform: translate(202px,368.833px) rotate(0deg)} 76.666667% {transform: translate(202px,368.833px) rotate(9.28425deg)} 79.166667% {transform: translate(202px,368.833px) rotate(0deg)} 80.833333% {transform: translate(202px,368.833px) rotate(9.28425deg)} 83.333333% {transform: translate(202px,368.833px) rotate(0deg)} 85% {transform: translate(202px,368.833px) rotate(9.28425deg)} 87.5% {transform: translate(202px,368.833px) rotate(0deg)} 94.166667% {transform: translate(202px,368.833px) rotate(9.28425deg)} 100% {transform: translate(202px,368.833px) rotate(0deg)}} #eY8vjRMuiwN11 {animation: eY8vjRMuiwN11__m 6000ms linear infinite normal forwards}@keyframes eY8vjRMuiwN11__m { 0% {d: path('M322,137.333L253.885081,269.017556L130,130.833L322,137.333')} 5% {d: path('M323.405601,205.362459L259.579661,270.877233L266.176838,251.433304L323.405601,205.362459')} 10% {d: path('M322,137.333L253.885081,269.017556L130,130.833L322,137.333')} 16.666667% {d: path('M329.571541,199.460907L259.579661,270.877233L266.176838,251.433304L329.571541,199.460907')} 25% {d: path('M322,137.333L253.885081,269.017556L130,130.833L322,137.333')} 41.666667% {d: path('M322,137.333L260.09032,270.754197L130,130.833L322,137.333')} 50% {d: path('M329.571541,199.460907L259.579661,270.877233L266.176838,251.433304L329.571541,199.460907')} 58.333333% {d: path('M322,137.333L253.885081,269.017556L130,130.833L322,137.333')} 60% {d: path('M329.571541,199.460907L259.579661,270.877233L266.176838,251.433304L329.571541,199.460907')} 62.5% {d: path('M322,137.333L253.885081,269.017556L130,130.833L322,137.333')} 64.166667% {d: path('M329.571541,199.460907L259.579661,270.877233L266.176838,251.433304L329.571541,199.460907')} 66.666667% {d: path('M322,137.333L253.885081,269.017556L130,130.833L322,137.333')} 68.333333% {d: path('M329.571541,199.460907L259.579661,270.877233L266.176838,251.433304L329.571541,199.460907')} 70.833333% {d: path('M322,137.333L253.885081,269.017556L130,130.833L322,137.333')} 72.5% {d: path('M329.571541,199.460907L259.579661,270.877233L266.176838,251.433304L329.571541,199.460907')} 75% {d: path('M322,137.333L253.885081,269.017556L130,130.833L322,137.333')} 76.666667% {d: path('M329.571541,199.460907L259.579661,270.877233L266.176838,251.433304L329.571541,199.460907')} 79.166667% {d: path('M322,137.333L253.885081,269.017556L130,130.833L322,137.333')} 80.833333% {d: path('M329.571541,199.460907L259.579661,270.877233L266.176838,251.433304L329.571541,199.460907')} 83.333333% {d: path('M322,137.333L253.885081,269.017556L130,130.833L322,137.333')} 85% {d: path('M329.571541,199.460907L259.579661,270.877233L266.176838,251.433304L329.571541,199.460907')} 87.5% {d: path('M322,137.333L253.885081,269.017556L130,130.833L322,137.333')} 94.166667% {d: path('M329.571541,199.460907L259.579661,270.877233L266.176838,251.433304L329.571541,199.460907')} 100% {d: path('M322,137.333L253.885081,269.017556L130,130.833L322,137.333')}} #eY8vjRMuiwN11-fill-0 {animation: eY8vjRMuiwN11-fill-0__c 6000ms linear infinite normal forwards}@keyframes eY8vjRMuiwN11-fill-0__c { 0% {stop-color: rgb(84,59,245)} 5% {stop-color: rgb(84,59,245)} 10% {stop-color: rgb(84,59,245)} 16.666667% {stop-color: rgb(84,59,245)} 25% {stop-color: rgb(84,59,245)} 41.666667% {stop-color: rgb(84,59,245)} 50% {stop-color: rgb(84,59,245)} 58.333333% {stop-color: rgb(84,59,245)} 60% {stop-color: rgb(84,59,245)} 62.5% {stop-color: rgb(84,59,245)} 64.166667% {stop-color: rgb(84,59,245)} 66.666667% {stop-color: rgb(84,59,245)} 68.333333% {stop-color: rgb(84,59,245)} 70.833333% {stop-color: rgb(84,59,245)} 72.5% {stop-color: rgb(84,59,245)} 75% {stop-color: rgb(84,59,245)} 76.666667% {stop-color: rgb(84,59,245)} 79.166667% {stop-color: rgb(84,59,245)} 80.833333% {stop-color: rgb(84,59,245)} 83.333333% {stop-color: rgb(84,59,245)} 85% {stop-color: rgb(84,59,245)} 87.5% {stop-color: rgb(84,59,245)} 94.166667% {stop-color: rgb(84,59,245)} 100% {stop-color: rgb(84,59,245)}} #eY8vjRMuiwN11-fill-1 {animation: eY8vjRMuiwN11-fill-1__c 6000ms linear infinite normal forwards}@keyframes eY8vjRMuiwN11-fill-1__c { 0% {stop-color: rgb(72,159,249)} 5% {stop-color: rgb(72,159,249)} 10% {stop-color: rgb(72,159,249)} 16.666667% {stop-color: rgb(72,159,249)} 25% {stop-color: rgb(72,159,249)} 41.666667% {stop-color: rgb(72,159,249)} 50% {stop-color: rgb(72,159,249)} 58.333333% {stop-color: rgb(72,159,249)} 60% {stop-color: rgb(72,159,249)} 62.5% {stop-color: rgb(72,159,249)} 64.166667% {stop-color: rgb(72,159,249)} 66.666667% {stop-color: rgb(72,159,249)} 68.333333% {stop-color: rgb(72,159,249)} 70.833333% {stop-color: rgb(72,159,249)} 72.5% {stop-color: rgb(72,159,249)} 75% {stop-color: rgb(72,159,249)} 76.666667% {stop-color: rgb(72,159,249)} 79.166667% {stop-color: rgb(72,159,249)} 80.833333% {stop-color: rgb(72,159,249)} 83.333333% {stop-color: rgb(72,159,249)} 85% {stop-color: rgb(72,159,249)} 87.5% {stop-color: rgb(72,159,249)} 94.166667% {stop-color: rgb(72,159,249)} 100% {stop-color: rgb(72,159,249)}} #eY8vjRMuiwN11-fill-2 {animation: eY8vjRMuiwN11-fill-2__c 6000ms linear infinite normal forwards}@keyframes eY8vjRMuiwN11-fill-2__c { 0% {stop-color: rgb(60,255,252)} 5% {stop-color: rgb(60,255,252)} 10% {stop-color: rgb(60,255,252)} 16.666667% {stop-color: rgb(60,255,252)} 25% {stop-color: rgb(60,255,252)} 41.666667% {stop-color: rgb(60,255,252)} 50% {stop-color: rgb(60,255,252)} 58.333333% {stop-color: rgb(60,255,252)} 60% {stop-color: rgb(60,255,252)} 62.5% {stop-color: rgb(60,255,252)} 64.166667% {stop-color: rgb(60,255,252)} 66.666667% {stop-color: rgb(60,255,252)} 68.333333% {stop-color: rgb(60,255,252)} 70.833333% {stop-color: rgb(60,255,252)} 72.5% {stop-color: rgb(60,255,252)} 75% {stop-color: rgb(60,255,252)} 76.666667% {stop-color: rgb(60,255,252)} 79.166667% {stop-color: rgb(60,255,252)} 80.833333% {stop-color: rgb(60,255,252)} 83.333333% {stop-color: rgb(60,255,252)} 85% {stop-color: rgb(60,255,252)} 87.5% {stop-color: rgb(60,255,252)} 94.166667% {stop-color: rgb(60,255,252)} 100% {stop-color: rgb(60,255,252)}} #eY8vjRMuiwN12 {animation: eY8vjRMuiwN12__m 6000ms linear infinite normal forwards}@keyframes eY8vjRMuiwN12__m { 0% {d: path('M322,137.5L253.920633,269.090538L192,63L322,137.5')} 5% {d: path('M323.855561,205.33575L259.579661,270.877233L297.968838,335.257792L323.855561,205.33575')} 10% {d: path('M322.04168,137.508891L253.913126,268.985394L192,63L322.04168,137.508891')} 16.666667% {d: path('M330.095816,198.81947L259.579661,270.877233L301.099805,320.25184L330.095816,198.81947')} 25% {d: path('M322.04168,137.508891L253.913126,268.985394L192,63L322.04168,137.508891')} 41.666667% {d: path('M322,137.5L259.579661,270.877233L192,63L322,137.5')} 50% {d: path('M330.095816,198.81947L259.579661,270.877233L301.099805,320.25184L330.095816,198.81947')} 58.333333% {d: path('M322.04168,137.508891L253.913126,268.985394L192,63L322.04168,137.508891')} 60% {d: path('M330.095816,198.81947L259.579661,270.877233L301.099805,320.25184L330.095816,198.81947')} 62.5% {d: path('M322.04168,137.508891L253.913126,268.985394L192,63L322.04168,137.508891')} 64.166667% {d: path('M330.095816,198.81947L259.579661,270.877233L301.099805,320.25184L330.095816,198.81947')} 66.666667% {d: path('M322.04168,137.508891L253.913126,268.985394L192,63L322.04168,137.508891')} 68.333333% {d: path('M330.095816,198.81947L259.579661,270.877233L301.099805,320.25184L330.095816,198.81947')} 70.833333% {d: path('M322.04168,137.508891L253.913126,268.985394L192,63L322.04168,137.508891')} 72.5% {d: path('M330.095816,198.81947L259.579661,270.877233L301.099805,320.25184L330.095816,198.81947')} 75% {d: path('M322.04168,137.508891L253.913126,268.985394L192,63L322.04168,137.508891')} 76.666667% {d: path('M330.095816,198.81947L259.579661,270.877233L301.099805,320.25184L330.095816,198.81947')} 79.166667% {d: path('M322.04168,137.508891L253.913126,268.985394L192,63L322.04168,137.508891')} 80.833333% {d: path('M330.095816,198.81947L259.579661,270.877233L301.099805,320.25184L330.095816,198.81947')} 83.333333% {d: path('M322.04168,137.508891L253.913126,268.985394L192,63L322.04168,137.508891')} 85% {d: path('M330.095816,198.81947L259.579661,270.877233L301.099805,320.25184L330.095816,198.81947')} 87.5% {d: path('M322.02451,137.534459L254.017301,268.913194L192,63L322.02451,137.534459')} 94.166667% {d: path('M330.095816,198.81947L259.579661,270.877233L301.099805,320.25184L330.095816,198.81947')} 100% {d: path('M322.02451,137.534459L254.017301,268.913194L192,63L322.02451,137.534459')}} #eY8vjRMuiwN13_ts {animation: eY8vjRMuiwN13_ts__ts 6000ms linear infinite normal forwards}@keyframes eY8vjRMuiwN13_ts__ts { 0% {transform: translate(318.018189px,545.991068px) scale(0.530273,0.530273)} 25% {transform: translate(318.018189px,545.991068px) scale(0.530273,0.530273)} 58.333333% {transform: translate(318.018189px,545.991068px) scale(1.225817,4.480951)} 87.5% {transform: translate(318.018189px,545.991068px) scale(0.530273,0.530273)} 100% {transform: translate(318.018189px,545.991068px) scale(0.530273,0.530273)}}</style><defs><linearGradient id="eY8vjRMuiwN5-fill" x1="0" y1="0.910995" x2="1" y2="0" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN5-fill-0" offset="0%" stop-color="rgb(239,59,94)"></stop><stop id="eY8vjRMuiwN5-fill-1" offset="40%" stop-color="rgb(248,101,83)"></stop><stop id="eY8vjRMuiwN5-fill-2" offset="100%" stop-color="rgb(255,138,75)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN6-fill" x1="0" y1="0.5" x2="1" y2="1" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN6-fill-0" offset="0%" stop-color="rgb(239,59,94)"></stop><stop id="eY8vjRMuiwN6-fill-1" offset="44%" stop-color="rgb(246,90,86)"></stop><stop id="eY8vjRMuiwN6-fill-2" offset="100%" stop-color="rgb(252,119,79)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN7-fill" x1="174.125166" y1="403.522925" x2="369.06317" y2="249.333" spreadMethod="pad" gradientUnits="userSpaceOnUse"><stop id="eY8vjRMuiwN7-fill-0" offset="0%" stop-color="rgb(239,59,94)"></stop><stop id="eY8vjRMuiwN7-fill-1" offset="100%" stop-color="rgb(255,138,75)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN7-fill-g1" x1="148.500519" y1="449.352987" x2="369.06317" y2="249.333" spreadMethod="pad" gradientUnits="userSpaceOnUse"><stop id="eY8vjRMuiwN7-fill-g1-0" offset="0%" stop-color="rgb(239,59,94)"></stop><stop id="eY8vjRMuiwN7-fill-g1-1" offset="100%" stop-color="rgb(255,138,75)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-1" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g1" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g1-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g1-1" offset="19%" stop-color="rgb(74,139,248)"></stop><stop id="eY8vjRMuiwN8-fill-g1-2" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g2" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g2-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g2-1" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g3" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g3-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g3-1" offset="19%" stop-color="rgb(74,139,248)"></stop><stop id="eY8vjRMuiwN8-fill-g3-2" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g4" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g4-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g4-1" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g5" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g5-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g5-1" offset="19%" stop-color="rgb(74,139,248)"></stop><stop id="eY8vjRMuiwN8-fill-g5-2" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g6" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g6-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g6-1" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g7" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g7-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g7-1" offset="19%" stop-color="rgb(74,139,248)"></stop><stop id="eY8vjRMuiwN8-fill-g7-2" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g8" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g8-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g8-1" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g9" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g9-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g9-1" offset="19%" stop-color="rgb(74,139,248)"></stop><stop id="eY8vjRMuiwN8-fill-g9-2" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g10" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g10-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g10-1" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g11" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g11-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g11-1" offset="19%" stop-color="rgb(74,139,248)"></stop><stop id="eY8vjRMuiwN8-fill-g11-2" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g12" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g12-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g12-1" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g13" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g13-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g13-1" offset="19%" stop-color="rgb(74,139,248)"></stop><stop id="eY8vjRMuiwN8-fill-g13-2" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g14" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g14-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g14-1" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g15" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g15-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g15-1" offset="19%" stop-color="rgb(74,139,248)"></stop><stop id="eY8vjRMuiwN8-fill-g15-2" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g16" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g16-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g16-1" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g17" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g17-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g17-1" offset="19%" stop-color="rgb(74,139,248)"></stop><stop id="eY8vjRMuiwN8-fill-g17-2" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g18" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g18-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g18-1" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g19" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g19-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g19-1" offset="19%" stop-color="rgb(74,139,248)"></stop><stop id="eY8vjRMuiwN8-fill-g19-2" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g20" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g20-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g20-1" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g21" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g21-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g21-1" offset="19%" stop-color="rgb(74,139,248)"></stop><stop id="eY8vjRMuiwN8-fill-g21-2" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN8-fill-g22" x1="0.367256" y1="0.508831" x2="1.319423" y2="0.971538" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN8-fill-g22-0" offset="0%" stop-color="rgb(75,134,248)"></stop><stop id="eY8vjRMuiwN8-fill-g22-1" offset="100%" stop-color="rgb(66,213,251)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN9-fill" x1="117.465207" y1="601.203817" x2="235.308816" y2="352.300492" spreadMethod="pad" gradientUnits="userSpaceOnUse"><stop id="eY8vjRMuiwN9-fill-0" offset="2%" stop-color="rgb(84,59,245)"></stop><stop id="eY8vjRMuiwN9-fill-1" offset="13%" stop-color="rgb(81,86,246)"></stop><stop id="eY8vjRMuiwN9-fill-2" offset="44.1%" stop-color="rgb(72,158,249)"></stop><stop id="eY8vjRMuiwN9-fill-3" offset="70%" stop-color="rgb(65,210,250)"></stop><stop id="eY8vjRMuiwN9-fill-4" offset="89.3%" stop-color="rgb(61,243,252)"></stop><stop id="eY8vjRMuiwN9-fill-5" offset="100%" stop-color="rgb(60,255,252)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN11-fill" x1="305.961872" y1="223.002341" x2="108.201486" y2="122.607977" spreadMethod="pad" gradientUnits="userSpaceOnUse"><stop id="eY8vjRMuiwN11-fill-0" offset="0%" stop-color="rgb(84,59,245)"></stop><stop id="eY8vjRMuiwN11-fill-1" offset="38%" stop-color="rgb(72,159,249)"></stop><stop id="eY8vjRMuiwN11-fill-2" offset="100%" stop-color="rgb(60,255,252)"></stop></linearGradient><linearGradient id="eY8vjRMuiwN12-fill" x1="-0.200784" y1="-0.105068" x2="0.839229" y2="0.71069" spreadMethod="pad" gradientUnits="objectBoundingBox"><stop id="eY8vjRMuiwN12-fill-0" offset="0%" stop-color="rgb(60,255,252)"></stop><stop id="eY8vjRMuiwN12-fill-1" offset="57%" stop-color="rgb(68,189,250)"></stop><stop id="eY8vjRMuiwN12-fill-2" offset="100%" stop-color="rgb(77,118,247)"></stop></linearGradient><radialGradient id="eY8vjRMuiwN13-fill" cx="0" cy="0" r="0.5" spreadMethod="pad" gradientUnits="objectBoundingBox" gradientTransform="matrix(1 0 0 1 0.5 0.5)"><stop id="eY8vjRMuiwN13-fill-0" offset="0%" stop-color="rgb(100,200,227)"></stop><stop id="eY8vjRMuiwN13-fill-1" offset="100%" stop-color="rgba(146,221,241,0)"></stop></radialGradient></defs><g id="eY8vjRMuiwN2" transform="matrix(1 0 0 1 0 -128.999999)"><g id="eY8vjRMuiwN3_to" transform="translate(324.379686,265.992198)"><g id="eY8vjRMuiwN3" transform="scale(0.526793,0.526793) translate(-329.5,-307.666504)"><g id="eY8vjRMuiwN4"><polygon id="eY8vjRMuiwN5" points="490,194.833 400.5,385.833 353.424581,239.003349 490,194.833" fill="url(#eY8vjRMuiwN5-fill)" stroke="none" stroke-width="1" stroke-miterlimit="1"></polygon><polygon id="eY8vjRMuiwN6" points="490,194.833 464.44219,249.333 555,249.333 490,194.833" fill="url(#eY8vjRMuiwN6-fill)" stroke="none" stroke-width="1" stroke-miterlimit="1"></polygon><path id="eY8vjRMuiwN7" d="M353.424581,239.003349L400.5,385.833L172.395478,459.381084L202,368.833L240.682388,294.129566L353.424581,239.003349Z" fill="url(#eY8vjRMuiwN7-fill)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="eY8vjRMuiwN8" d="M321.220664,138.624761L240.682388,294.129566L353.424581,239.003349L321.220664,138.624761Z" fill="url(#eY8vjRMuiwN8-fill)" stroke="none" stroke-width="1.23" stroke-miterlimit="1"></path><g id="eY8vjRMuiwN9_tr" transform="translate(202,368.833) rotate(0)"><path id="eY8vjRMuiwN9" d="M202,368.833L104,552.333L193,535.833L202,368.833Z" transform="translate(-202,-368.833)" fill="url(#eY8vjRMuiwN9-fill)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path></g><g id="eY8vjRMuiwN10" transform="matrix(1.182388 0 0 1.182388 -59.50829 -23.953583)"><path id="eY8vjRMuiwN11" d="M322,137.333L253.885081,269.017556L130,130.833L322,137.333Z" fill="url(#eY8vjRMuiwN11-fill)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="eY8vjRMuiwN12" d="M322,137.5L253.920633,269.090538L192,63L322,137.5Z" fill="url(#eY8vjRMuiwN12-fill)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path></g></g></g></g><g id="eY8vjRMuiwN13_ts" transform="translate(318.018189,545.991068) scale(0.530273,0.530273)"><ellipse id="eY8vjRMuiwN13" rx="179.590139" ry="5.51642" transform="translate(0,0)" fill="url(#eY8vjRMuiwN13-fill)" stroke="none" stroke-width="0" stroke-miterlimit="1"></ellipse></g></g></svg>    
  </p>
  </div>
  <style>
  body {
    margin-bottom: 20px;
    background-image: url('/img/world_dots.png');
    background-position: bottom;font-size:14pt;
}
svg {height: 80vh; display: block; margin: auto;}
  </style>
 </body>
</html>
EOF);
    }
}

<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://lh3.googleusercontent.com/proxy/cT5Kvuvvro_ClXFNoD7lPh-Y6w7_KAbD6uiQmGCNWTAzyrpj93-t2Rln4uPeV2RNU6YJjJLNMxBf-HlKtM_CEABl6IriO27T27jVJLc-N2atKpat" class="" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

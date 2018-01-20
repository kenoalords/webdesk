@if($faqs->count())
	@each('faq.includes.faq', $faqs, 'faq')
@endif
<h3>Témoignages</h3>
{foreach $testimonials as $testimonial}
    <ul>
        <li>
            <a href="{$testimonial.link}"></a>
            {$testimonial.testimonials}
            {$testimonial.testimonials_name}
        </li>
    </ul>
{/foreach}

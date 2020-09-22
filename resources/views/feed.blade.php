{{ Request::header('Content-Type : application/xml') }}

<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>

        <title>{{ config('app.name') }}</title>
        <description>RSS Feed</description>
        <link>{{ url('/') }}</link>
        @foreach ($courses as $course)
        @php
        $course->title = str_replace("&", "&amp;", $course->title);
        $course->description = str_replace("&rdquo;", "”", $course->description);
        $course->slug = str_replace("&ldquo;", "“", $course->description);

        $course->title = stripslashes($course->title);
        $course->description = stripslashes($course->description);
        $course->slug = stripslashes($course->slug);

       
        //$img = "<img src='{{ asset('uploads/' . $course->course_image) }}' alt='".$course->title."' width='600'>";
        

        @endphp
        <item>
        <title>{{ $course->title }}</title>
        <description>
            <![CDATA[ {!! $course->description !!}]]>
        </description>
        <pubDate>{{ date('D, d M Y H:i:s', strtotime($course->created_at)) }} GMT</pubDate>
        <link>{{ url($course->slug) }}</link>
        <guid>{{ url($course->slug) }}</guid>
        <atom:link href="{{ url($course->slug) }}" rel="self" type="application/rss+xml" />
        </item>
        @endforeach
    </channel>
</rss>

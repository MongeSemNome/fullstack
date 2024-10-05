<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://i.imgur.com/qUxQeP6.jpeg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #0d6efd;
        }

        .cta-section {
            background-color: #f8f9fa;
            padding: 5rem 0;
        }

        .testimonial-section {
            background-color: #e9ecef;
            padding: 5rem 0;
        }

        .testimonial-card {
            background-color: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .timeline {
            position: relative;
            padding: 0;
            list-style: none;
        }

        .timeline:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 2px;
            margin-left: -1.5px;
            background-color: #e9ecef;
        }

        .timeline>li {
            position: relative;
            margin-bottom: 50px;
            min-height: 50px;
        }

        .timeline>li:before,
        .timeline>li:after {
            content: " ";
            display: table;
        }

        .timeline>li:after {
            clear: both;
        }

        .timeline>li .timeline-panel {
            float: left;
            position: relative;
            width: 46%;
            padding: 20px;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.05);
        }

        .timeline>li .timeline-panel:before {
            position: absolute;
            top: 26px;
            right: -15px;
            display: inline-block;
            border-top: 15px solid transparent;
            border-left: 15px solid #e9ecef;
            border-right: 0 solid #e9ecef;
            border-bottom: 15px solid transparent;
            content: " ";
        }

        .timeline>li .timeline-panel:after {
            position: absolute;
            top: 27px;
            right: -14px;
            display: inline-block;
            border-top: 14px solid transparent;
            border-left: 14px solid #fff;
            border-right: 0 solid #fff;
            border-bottom: 14px solid transparent;
            content: " ";
        }

        .timeline>li .timeline-image {
            z-index: 100;
            position: absolute;
            left: 50%;
            width: 80px;
            height: 80px;
            margin-left: -40px;
            border: 7px solid #e9ecef;
            border-radius: 100%;
            text-align: center;
            color: #fff;
            background-color: #0d6efd;
        }

        .timeline>li .timeline-image h4 {
            font-size: 10px;
            margin-top: 12px;
            line-height: 14px;
        }

        .timeline>li.timeline-inverted>.timeline-panel {
            float: right;
        }

        .timeline>li.timeline-inverted>.timeline-panel:before {
            border-left-width: 0;
            border-right-width: 15px;
            left: -15px;
            right: auto;
        }

        .timeline>li.timeline-inverted>.timeline-panel:after {
            border-left-width: 0;
            border-right-width: 14px;
            left: -14px;
            right: auto;
        }

        .contact-icon {
            font-size: 2rem;
            color: #0d6efd;
        }

        .map-container {
            height: 300px;
            width: 100%;
        }

        .service-icon {
            font-size: 3rem;
            color: #0d6efd;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1);
        }

        .service-card {
            transition: all 0.3s ease;
        }

        .service-card:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }
    </style>
</head>

<!DOCTYPE html>
<html amp lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Senac | EAD</title>
    <!-- Tell the browser to be responsive to screen width -->

    <style amp-boilerplate>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both
        }

        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }
    </style><noscript>
        <style amp-boilerplate>
            body {
    -webkit-animation: none;
    -moz-animation: none;
    -ms-animation: none;
    animation: none
}
        </style>
    </noscript>

    <style amp-custom>
        html {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }


        td,
        th {
            padding: 0
        }

        /*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
        @media print {

            *,
            :after,
            :before {
                color: #000;
                text-shadow: none;
                background: 0 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            a,
            a:visited {
                text-decoration: underline
            }

            a[href]:after {
                content: " ("attr(href) ")"
            }

            abbr[title]:after {
                content: " ("attr(title) ")"
            }

            a[href^="#"]:after,
            a[href^="javascript:"]:after {
                content: ""
            }

            blockquote,
            pre {
                border: 1px solid #999;
                page-break-inside: avoid
            }

            thead {
                display: table-header-group
            }

            img,
            tr {
                page-break-inside: avoid
            }

            img {
                max-width: 100%
            }

            h2,
            h3,
            p {
                orphans: 3;
                widows: 3
            }

            h2,
            h3 {
                page-break-after: avoid
            }

            .navbar {
                display: none
            }

            .btn>.caret,
            .dropup>.btn>.caret {
                border-top-color: #000
            }

            .label {
                border: 1px solid #000
            }

            .table {
                border-collapse: collapse
            }

            .table td,
            .table th {
                background-color: #fff
            }

            .table-bordered td,
            .table-bordered th {
                border: 1px solid #ddd
            }
        }

        @font-face {
            font-family: "Glyphicons Halflings";
            src: url(../fonts/glyphicons-halflings-regular.eot);
            src: url(../fonts/glyphicons-halflings-regular.eot?#iefix) format("embedded-opentype"), url(../fonts/glyphicons-halflings-regular.woff2) format("woff2"), url(../fonts/glyphicons-halflings-regular.woff) format("woff"), url(../fonts/glyphicons-halflings-regular.ttf) format("truetype"), url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format("svg")
        }



        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        :after,
        :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        html {
            font-size: 10px;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            background-color: #fff
        }

        button,
        input,
        select,
        textarea {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        a {
            color: #337ab7;
            text-decoration: none
        }

        a:focus,
        a:hover {
            color: #23527c;
            text-decoration: underline
        }

        a:focus {
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px
        }

        figure {
            margin: 0
        }

        img {
            vertical-align: middle
        }

        .bg-danger {
            background-color: #f2dede
        }

        a.bg-danger:focus,
        a.bg-danger:hover {
            background-color: #e4b9b9
        }

        .page-header {
            padding-bottom: 9px;
            margin: 40px 0 20px;
            border-bottom: 1px solid #eee
        }

        ol,
        ul {
            margin-top: 0;
            margin-bottom: 10px
        }

        ol ol,
        ol ul,
        ul ol,
        ul ul {
            margin-bottom: 0
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none
        }

        .list-inline {
            padding-left: 0;
            list-style: none;
            margin-left: -5px
        }

        .list-inline>li {
            display: inline-block;
            padding-right: 5px;
            padding-left: 5px
        }


        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width: 768px) {
            .container {
                width: 750px
            }
        }

        @media (min-width: 992px) {
            .container {
                width: 970px
            }
        }

        @media (min-width: 1200px) {
            .container {
                width: 1170px
            }
        }

        .container-fluid {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        .row {
            margin-right: -15px;
            margin-left: -15px
        }

        .row-no-gutters {
            margin-right: 0;
            margin-left: 0
        }

        .row-no-gutters [class*=col-] {
            padding-right: 0;
            padding-left: 0
        }

        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-xs-1,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px
        }

        .col-xs-1,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9 {
            float: left
        }


        @media (min-width: 768px) {

            .col-sm-1,
            .col-sm-10,
            .col-sm-11,
            .col-sm-12,
            .col-sm-2,
            .col-sm-3,
            .col-sm-4,
            .col-sm-5,
            .col-sm-6,
            .col-sm-7,
            .col-sm-8,
            .col-sm-9 {
                float: left
            }

            .col-sm-12 {
                width: 100%
            }

            .col-sm-11 {
                width: 91.66666667%
            }

            .col-sm-10 {
                width: 83.33333333%
            }

            .col-sm-9 {
                width: 75%
            }

            .col-sm-8 {
                width: 66.66666667%
            }

            .col-sm-7 {
                width: 58.33333333%
            }

            .col-sm-6 {
                width: 50%
            }

            .col-sm-5 {
                width: 41.66666667%
            }

            .col-sm-4 {
                width: 33.33333333%
            }

            .col-sm-3 {
                width: 25%
            }

            .col-sm-2 {
                width: 16.66666667%
            }

            .col-sm-1 {
                width: 8.33333333%
            }

            .col-sm-pull-12 {
                right: 100%
            }

            .col-sm-pull-11 {
                right: 91.66666667%
            }

            .col-sm-pull-10 {
                right: 83.33333333%
            }

            .col-sm-pull-9 {
                right: 75%
            }

            .col-sm-pull-8 {
                right: 66.66666667%
            }

            .col-sm-pull-7 {
                right: 58.33333333%
            }

            .col-sm-pull-6 {
                right: 50%
            }

            .col-sm-pull-5 {
                right: 41.66666667%
            }

            .col-sm-pull-4 {
                right: 33.33333333%
            }

            .col-sm-pull-3 {
                right: 25%
            }

            .col-sm-pull-2 {
                right: 16.66666667%
            }

            .col-sm-pull-1 {
                right: 8.33333333%
            }

            .col-sm-pull-0 {
                right: auto
            }

            .col-sm-push-12 {
                left: 100%
            }

            .col-sm-push-11 {
                left: 91.66666667%
            }

            .col-sm-push-10 {
                left: 83.33333333%
            }

            .col-sm-push-9 {
                left: 75%
            }

            .col-sm-push-8 {
                left: 66.66666667%
            }

            .col-sm-push-7 {
                left: 58.33333333%
            }

            .col-sm-push-6 {
                left: 50%
            }

            .col-sm-push-5 {
                left: 41.66666667%
            }

            .col-sm-push-4 {
                left: 33.33333333%
            }

            .col-sm-push-3 {
                left: 25%
            }

            .col-sm-push-2 {
                left: 16.66666667%
            }

            .col-sm-push-1 {
                left: 8.33333333%
            }

            .col-sm-push-0 {
                left: auto
            }

            .col-sm-offset-12 {
                margin-left: 100%
            }

            .col-sm-offset-11 {
                margin-left: 91.66666667%
            }

            .col-sm-offset-10 {
                margin-left: 83.33333333%
            }

            .col-sm-offset-9 {
                margin-left: 75%
            }

            .col-sm-offset-8 {
                margin-left: 66.66666667%
            }

            .col-sm-offset-7 {
                margin-left: 58.33333333%
            }

            .col-sm-offset-6 {
                margin-left: 50%
            }

            .col-sm-offset-5 {
                margin-left: 41.66666667%
            }

            .col-sm-offset-4 {
                margin-left: 33.33333333%
            }

            .col-sm-offset-3 {
                margin-left: 25%
            }

            .col-sm-offset-2 {
                margin-left: 16.66666667%
            }

            .col-sm-offset-1 {
                margin-left: 8.33333333%
            }

            .col-sm-offset-0 {
                margin-left: 0
            }
        }

        @media (min-width: 992px) {

            .col-md-1,
            .col-md-10,
            .col-md-11,
            .col-md-12,
            .col-md-2,
            .col-md-3,
            .col-md-4,
            .col-md-5,
            .col-md-6,
            .col-md-7,
            .col-md-8,
            .col-md-9 {
                float: left
            }

            .col-md-12 {
                width: 100%
            }

            .col-md-11 {
                width: 91.66666667%
            }

            .col-md-10 {
                width: 83.33333333%
            }

            .col-md-9 {
                width: 75%
            }

            .col-md-8 {
                width: 66.66666667%
            }

            .col-md-7 {
                width: 58.33333333%
            }

            .col-md-6 {
                width: 50%
            }

            .col-md-5 {
                width: 41.66666667%
            }

            .col-md-4 {
                width: 33.33333333%
            }

            .col-md-3 {
                width: 25%
            }

            .col-md-2 {
                width: 16.66666667%
            }

            .col-md-1 {
                width: 8.33333333%
            }

            .col-md-pull-12 {
                right: 100%
            }

            .col-md-pull-11 {
                right: 91.66666667%
            }

            .col-md-pull-10 {
                right: 83.33333333%
            }

            .col-md-pull-9 {
                right: 75%
            }

            .col-md-pull-8 {
                right: 66.66666667%
            }

            .col-md-pull-7 {
                right: 58.33333333%
            }

            .col-md-pull-6 {
                right: 50%
            }

            .col-md-pull-5 {
                right: 41.66666667%
            }

            .col-md-pull-4 {
                right: 33.33333333%
            }

            .col-md-pull-3 {
                right: 25%
            }

            .col-md-pull-2 {
                right: 16.66666667%
            }

            .col-md-pull-1 {
                right: 8.33333333%
            }

            .col-md-pull-0 {
                right: auto
            }

            .col-md-push-12 {
                left: 100%
            }

            .col-md-push-11 {
                left: 91.66666667%
            }

            .col-md-push-10 {
                left: 83.33333333%
            }

            .col-md-push-9 {
                left: 75%
            }

            .col-md-push-8 {
                left: 66.66666667%
            }

            .col-md-push-7 {
                left: 58.33333333%
            }

            .col-md-push-6 {
                left: 50%
            }

            .col-md-push-5 {
                left: 41.66666667%
            }

            .col-md-push-4 {
                left: 33.33333333%
            }

            .col-md-push-3 {
                left: 25%
            }

            .col-md-push-2 {
                left: 16.66666667%
            }

            .col-md-push-1 {
                left: 8.33333333%
            }

            .col-md-push-0 {
                left: auto
            }

            .col-md-offset-12 {
                margin-left: 100%
            }

            .col-md-offset-11 {
                margin-left: 91.66666667%
            }

            .col-md-offset-10 {
                margin-left: 83.33333333%
            }

            .col-md-offset-9 {
                margin-left: 75%
            }

            .col-md-offset-8 {
                margin-left: 66.66666667%
            }

            .col-md-offset-7 {
                margin-left: 58.33333333%
            }

            .col-md-offset-6 {
                margin-left: 50%
            }

            .col-md-offset-5 {
                margin-left: 41.66666667%
            }

            .col-md-offset-4 {
                margin-left: 33.33333333%
            }

            .col-md-offset-3 {
                margin-left: 25%
            }

            .col-md-offset-2 {
                margin-left: 16.66666667%
            }

            .col-md-offset-1 {
                margin-left: 8.33333333%
            }

            .col-md-offset-0 {
                margin-left: 0
            }
        }



        .nav {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .nav>li {
            position: relative;
            display: block
        }

        .nav>li>a {
            position: relative;
            display: block;
            padding: 10px 15px
        }

        .nav>li>a:focus,
        .nav>li>a:hover {
            text-decoration: none;
            background-color: #eee
        }

        .nav>li.disabled>a {
            color: #777
        }

        .nav>li.disabled>a:focus,
        .nav>li.disabled>a:hover {
            color: #777;
            text-decoration: none;
            cursor: not-allowed;
            background-color: transparent
        }

        .nav .open>a,
        .nav .open>a:focus,
        .nav .open>a:hover {
            background-color: #eee;
            border-color: #337ab7
        }

        .nav .nav-divider {
            height: 1px;
            margin: 9px 0;
            overflow: hidden;
            background-color: #e5e5e5
        }

        .nav>li>a>img {
            max-width: none
        }

        .nav-tabs {
            border-bottom: 1px solid #ddd
        }

        .nav-tabs>li {
            float: left;
            margin-bottom: -1px
        }

        .nav-tabs>li>a {
            margin-right: 2px;
            line-height: 1.42857143;
            border: 1px solid transparent;
            border-radius: 4px 4px 0 0
        }

        .nav-tabs>li>a:hover {
            border-color: #eee #eee #ddd
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            color: #555;
            cursor: default;
            background-color: #fff;
            border: 1px solid #ddd;
            border-bottom-color: transparent
        }

        .nav-tabs.nav-justified {
            width: 100%;
            border-bottom: 0
        }

        .nav-tabs.nav-justified>li {
            float: none
        }

        .nav-tabs.nav-justified>li>a {
            margin-bottom: 5px;
            text-align: center
        }

        .nav-tabs.nav-justified>.dropdown .dropdown-menu {
            top: auto;
            left: auto
        }

        @media (min-width: 768px) {
            .nav-tabs.nav-justified>li {
                display: table-cell;
                width: 1%
            }

            .nav-tabs.nav-justified>li>a {
                margin-bottom: 0
            }
        }

        .nav-tabs.nav-justified>li>a {
            margin-right: 0;
            border-radius: 4px
        }

        .nav-tabs.nav-justified>.active>a,
        .nav-tabs.nav-justified>.active>a:focus,
        .nav-tabs.nav-justified>.active>a:hover {
            border: 1px solid #ddd
        }

        @media (min-width: 768px) {
            .nav-tabs.nav-justified>li>a {
                border-bottom: 1px solid #ddd;
                border-radius: 4px 4px 0 0
            }

            .nav-tabs.nav-justified>.active>a,
            .nav-tabs.nav-justified>.active>a:focus,
            .nav-tabs.nav-justified>.active>a:hover {
                border-bottom-color: #fff
            }
        }

        .nav-pills>li {
            float: left
        }

        .nav-pills>li>a {
            border-radius: 4px
        }

        .nav-pills>li+li {
            margin-left: 2px
        }

        .nav-pills>li.active>a,
        .nav-pills>li.active>a:focus,
        .nav-pills>li.active>a:hover {
            color: #fff;
            background-color: #337ab7
        }

        .nav-stacked>li {
            float: none
        }

        .nav-stacked>li+li {
            margin-top: 2px;
            margin-left: 0
        }

        .nav-justified {
            width: 100%
        }

        .nav-justified>li {
            float: none
        }

        .nav-justified>li>a {
            margin-bottom: 5px;
            text-align: center
        }

        .nav-justified>.dropdown .dropdown-menu {
            top: auto;
            left: auto
        }

        @media (min-width: 768px) {
            .nav-justified>li {
                display: table-cell;
                width: 1%
            }

            .nav-justified>li>a {
                margin-bottom: 0
            }
        }

        .nav-tabs-justified {
            border-bottom: 0
        }

        .nav-tabs-justified>li>a {
            margin-right: 0;
            border-radius: 4px
        }

        .nav-tabs-justified>.active>a,
        .nav-tabs-justified>.active>a:focus,
        .nav-tabs-justified>.active>a:hover {
            border: 1px solid #ddd
        }

        @media (min-width: 768px) {
            .nav-tabs-justified>li>a {
                border-bottom: 1px solid #ddd;
                border-radius: 4px 4px 0 0
            }

            .nav-tabs-justified>.active>a,
            .nav-tabs-justified>.active>a:focus,
            .nav-tabs-justified>.active>a:hover {
                border-bottom-color: #fff
            }
        }

        .tab-content>.tab-pane {
            display: none
        }

        .tab-content>.active {
            display: block
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .navbar {
            position: relative;
            min-height: 50px;
            margin-bottom: 20px;
            border: 1px solid transparent
        }

        @media (min-width: 768px) {
            .navbar {
                border-radius: 4px
            }
        }

        @media (min-width: 768px) {
            .navbar-header {
                float: left
            }
        }

        .navbar-collapse {
            padding-right: 15px;
            padding-left: 15px;
            overflow-x: visible;
            border-top: 1px solid transparent;
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
            -webkit-overflow-scrolling: touch
        }

        .navbar-collapse.in {
            overflow-y: auto
        }

        @media (min-width: 768px) {
            .navbar-collapse {
                width: auto;
                border-top: 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .navbar-collapse.collapse {
                display: block;
                height: auto;
                padding-bottom: 0;
                overflow: visible
            }

            .navbar-collapse.in {
                overflow-y: visible
            }

            .navbar-fixed-bottom .navbar-collapse,
            .navbar-fixed-top .navbar-collapse,
            .navbar-static-top .navbar-collapse {
                padding-right: 0;
                padding-left: 0
            }
        }

        .navbar-fixed-bottom,
        .navbar-fixed-top {
            position: fixed;
            right: 0;
            left: 0;
            z-index: 1030
        }

        .navbar-fixed-bottom .navbar-collapse,
        .navbar-fixed-top .navbar-collapse {
            max-height: 340px
        }

        @media (max-device-width: 480px) and (orientation:landscape) {

            .navbar-fixed-bottom .navbar-collapse,
            .navbar-fixed-top .navbar-collapse {
                max-height: 200px
            }
        }

        @media (min-width: 768px) {

            .navbar-fixed-bottom,
            .navbar-fixed-top {
                border-radius: 0
            }
        }

        .navbar-fixed-top {
            top: 0;
            border-width: 0 0 1px
        }

        .navbar-fixed-bottom {
            bottom: 0;
            margin-bottom: 0;
            border-width: 1px 0 0
        }

        .container-fluid>.navbar-collapse,
        .container-fluid>.navbar-header,
        .container>.navbar-collapse,
        .container>.navbar-header {
            margin-right: -15px;
            margin-left: -15px
        }

        @media (min-width: 768px) {

            .container-fluid>.navbar-collapse,
            .container-fluid>.navbar-header,
            .container>.navbar-collapse,
            .container>.navbar-header {
                margin-right: 0;
                margin-left: 0
            }
        }

        .navbar-static-top {
            z-index: 1000;
            border-width: 0 0 1px
        }

        @media (min-width: 768px) {
            .navbar-static-top {
                border-radius: 0
            }
        }

        .navbar-brand {
            float: left;
            height: 50px;
            padding: 15px 15px;
            font-size: 18px;
            line-height: 20px
        }

        .navbar-brand:focus,
        .navbar-brand:hover {
            text-decoration: none
        }

        .navbar-brand>img {
            display: block
        }

        @media (min-width: 768px) {

            .navbar>.container .navbar-brand,
            .navbar>.container-fluid .navbar-brand {
                margin-left: -15px
            }
        }

        .navbar-toggle {
            position: relative;
            float: right;
            padding: 9px 10px;
            margin-right: 15px;
            margin-top: 8px;
            margin-bottom: 8px;
            background-color: transparent;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px
        }

        .navbar-toggle:focus {
            outline: 0
        }

        .navbar-toggle .icon-bar {
            display: block;
            width: 22px;
            height: 2px;
            border-radius: 1px
        }

        .navbar-toggle .icon-bar+.icon-bar {
            margin-top: 4px
        }

        @media (min-width: 768px) {
            .navbar-toggle {
                display: none
            }
        }

        .navbar-nav {
            margin: 7.5px -15px
        }

        .navbar-nav>li>a {
            padding-top: 10px;
            padding-bottom: 10px;
            line-height: 20px
        }

        @media (max-width: 767px) {
            .navbar-nav .open .dropdown-menu {
                position: static;
                float: none;
                width: auto;
                margin-top: 0;
                background-color: transparent;
                border: 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .navbar-nav .open .dropdown-menu .dropdown-header,
            .navbar-nav .open .dropdown-menu>li>a {
                padding: 5px 15px 5px 25px
            }

            .navbar-nav .open .dropdown-menu>li>a {
                line-height: 20px
            }

            .navbar-nav .open .dropdown-menu>li>a:focus,
            .navbar-nav .open .dropdown-menu>li>a:hover {
                background-image: none
            }
        }

        @media (min-width: 768px) {
            .navbar-nav {
                float: left;
                margin: 0
            }

            .navbar-nav>li {
                float: left
            }

            .navbar-nav>li>a {
                padding-top: 15px;
                padding-bottom: 15px
            }
        }

        .navbar-form {
            padding: 10px 15px;
            margin-right: -15px;
            margin-left: -15px;
            border-top: 1px solid transparent;
            border-bottom: 1px solid transparent;
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
            margin-top: 8px;
            margin-bottom: 8px
        }

        @media (min-width: 768px) {
            .navbar-form .form-group {
                display: inline-block;
                margin-bottom: 0;
                vertical-align: middle
            }

            .navbar-form .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle
            }

            .navbar-form .form-control-static {
                display: inline-block
            }

            .navbar-form .input-group {
                display: inline-table;
                vertical-align: middle
            }

            .navbar-form .input-group .form-control,
            .navbar-form .input-group .input-group-addon,
            .navbar-form .input-group .input-group-btn {
                width: auto
            }

            .navbar-form .input-group>.form-control {
                width: 100%
            }

            .navbar-form .control-label {
                margin-bottom: 0;
                vertical-align: middle
            }

            .navbar-form .checkbox,
            .navbar-form .radio {
                display: inline-block;
                margin-top: 0;
                margin-bottom: 0;
                vertical-align: middle
            }

            .navbar-form .checkbox label,
            .navbar-form .radio label {
                padding-left: 0
            }

            .navbar-form .checkbox input[type=checkbox],
            .navbar-form .radio input[type=radio] {
                position: relative;
                margin-left: 0
            }

            .navbar-form .has-feedback .form-control-feedback {
                top: 0
            }
        }

        @media (max-width: 767px) {
            .navbar-form .form-group {
                margin-bottom: 5px
            }

            .navbar-form .form-group:last-child {
                margin-bottom: 0
            }
        }

        @media (min-width: 768px) {
            .navbar-form {
                width: auto;
                padding-top: 0;
                padding-bottom: 0;
                margin-right: 0;
                margin-left: 0;
                border: 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }
        }

        .navbar-nav>li>.dropdown-menu {
            margin-top: 0;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
            margin-bottom: 0;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .navbar-btn {
            margin-top: 8px;
            margin-bottom: 8px
        }

        .navbar-btn.btn-sm {
            margin-top: 10px;
            margin-bottom: 10px
        }

        .navbar-btn.btn-xs {
            margin-top: 14px;
            margin-bottom: 14px
        }

        .navbar-text {
            margin-top: 15px;
            margin-bottom: 15px
        }

        @media (min-width: 768px) {
            .navbar-text {
                float: left;
                margin-right: 15px;
                margin-left: 15px
            }
        }

        @media (min-width: 768px) {
            .navbar-left {
                float: left
            }

            .navbar-right {
                float: right;
                margin-right: -15px
            }

            .navbar-right~.navbar-right {
                margin-right: 0
            }
        }

        .navbar-default {
            background-color: #f8f8f8;
            border-color: #e7e7e7
        }

        .navbar-default .navbar-brand {
            color: #777
        }

        .navbar-default .navbar-brand:focus,
        .navbar-default .navbar-brand:hover {
            color: #5e5e5e;
            background-color: transparent
        }

        .navbar-default .navbar-text {
            color: #777
        }

        .navbar-default .navbar-nav>li>a {
            color: #777
        }

        .navbar-default .navbar-nav>li>a:focus,
        .navbar-default .navbar-nav>li>a:hover {
            color: #333;
            background-color: transparent
        }

        .navbar-default .navbar-nav>.active>a,
        .navbar-default .navbar-nav>.active>a:focus,
        .navbar-default .navbar-nav>.active>a:hover {
            color: #555;
            background-color: #e7e7e7
        }

        .navbar-default .navbar-nav>.disabled>a,
        .navbar-default .navbar-nav>.disabled>a:focus,
        .navbar-default .navbar-nav>.disabled>a:hover {
            color: #ccc;
            background-color: transparent
        }

        .navbar-default .navbar-nav>.open>a,
        .navbar-default .navbar-nav>.open>a:focus,
        .navbar-default .navbar-nav>.open>a:hover {
            color: #555;
            background-color: #e7e7e7
        }

        @media (max-width: 767px) {
            .navbar-default .navbar-nav .open .dropdown-menu>li>a {
                color: #777
            }

            .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,
            .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
                color: #333;
                background-color: transparent
            }

            .navbar-default .navbar-nav .open .dropdown-menu>.active>a,
            .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,
            .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover {
                color: #555;
                background-color: #e7e7e7
            }

            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,
            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,
            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover {
                color: #ccc;
                background-color: transparent
            }
        }

        .navbar-default .navbar-toggle {
            border-color: #ddd
        }

        .navbar-default .navbar-toggle:focus,
        .navbar-default .navbar-toggle:hover {
            background-color: #ddd
        }

        .navbar-default .navbar-toggle .icon-bar {
            background-color: #888
        }

        .navbar-default .navbar-collapse,
        .navbar-default .navbar-form {
            border-color: #e7e7e7
        }

        .navbar-default .navbar-link {
            color: #777
        }

        .navbar-default .navbar-link:hover {
            color: #333
        }

        .navbar-default .btn-link {
            color: #777
        }

        .navbar-default .btn-link:focus,
        .navbar-default .btn-link:hover {
            color: #333
        }

        .navbar-default .btn-link[disabled]:focus,
        .navbar-default .btn-link[disabled]:hover,
        fieldset[disabled] .navbar-default .btn-link:focus,
        fieldset[disabled] .navbar-default .btn-link:hover {
            color: #ccc
        }

        .navbar-inverse {
            background-color: #222;
            border-color: #080808
        }

        .navbar-inverse .navbar-brand {
            color: #9d9d9d
        }

        .navbar-inverse .navbar-brand:focus,
        .navbar-inverse .navbar-brand:hover {
            color: #fff;
            background-color: transparent
        }

        .navbar-inverse .navbar-text {
            color: #9d9d9d
        }

        .navbar-inverse .navbar-nav>li>a {
            color: #9d9d9d
        }

        .navbar-inverse .navbar-nav>li>a:focus,
        .navbar-inverse .navbar-nav>li>a:hover {
            color: #fff;
            background-color: transparent
        }

        .navbar-inverse .navbar-nav>.active>a,
        .navbar-inverse .navbar-nav>.active>a:focus,
        .navbar-inverse .navbar-nav>.active>a:hover {
            color: #fff;
            background-color: #080808
        }

        .navbar-inverse .navbar-nav>.disabled>a,
        .navbar-inverse .navbar-nav>.disabled>a:focus,
        .navbar-inverse .navbar-nav>.disabled>a:hover {
            color: #444;
            background-color: transparent
        }

        .navbar-inverse .navbar-nav>.open>a,
        .navbar-inverse .navbar-nav>.open>a:focus,
        .navbar-inverse .navbar-nav>.open>a:hover {
            color: #fff;
            background-color: #080808
        }

        @media (max-width: 767px) {
            .navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header {
                border-color: #080808
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
                background-color: #080808
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
                color: #9d9d9d
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,
            .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover {
                color: #fff;
                background-color: transparent
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover {
                color: #fff;
                background-color: #080808
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover {
                color: #444;
                background-color: transparent
            }
        }

        .navbar-inverse .navbar-toggle {
            border-color: #333
        }

        .navbar-inverse .navbar-toggle:focus,
        .navbar-inverse .navbar-toggle:hover {
            background-color: #333
        }

        .navbar-inverse .navbar-toggle .icon-bar {
            background-color: #fff
        }

        .navbar-inverse .navbar-collapse,
        .navbar-inverse .navbar-form {
            border-color: #101010
        }

        .navbar-inverse .navbar-link {
            color: #9d9d9d
        }

        .navbar-inverse .navbar-link:hover {
            color: #fff
        }

        .navbar-inverse .btn-link {
            color: #9d9d9d
        }

        .navbar-inverse .btn-link:focus,
        .navbar-inverse .btn-link:hover {
            color: #fff
        }

        .navbar-inverse .btn-link[disabled]:focus,
        .navbar-inverse .btn-link[disabled]:hover,
        fieldset[disabled] .navbar-inverse .btn-link:focus,
        fieldset[disabled] .navbar-inverse .btn-link:hover {
            color: #444
        }


        a.list-group-item,
        button.list-group-item {
            color: #555
        }

        a.list-group-item .list-group-item-heading,
        button.list-group-item .list-group-item-heading {
            color: #333
        }

        a.list-group-item:focus,
        a.list-group-item:hover,
        button.list-group-item:focus,
        button.list-group-item:hover {
            color: #555;
            text-decoration: none;
            background-color: #f5f5f5
        }

        button.list-group-item {
            width: 100%;
            text-align: left
        }

        .list-group-item-success {
            color: #3c763d;
            background-color: #dff0d8
        }

        a.list-group-item-success,
        button.list-group-item-success {
            color: #3c763d
        }

        a.list-group-item-success .list-group-item-heading,
        button.list-group-item-success .list-group-item-heading {
            color: inherit
        }

        a.list-group-item-success:focus,
        a.list-group-item-success:hover,
        button.list-group-item-success:focus,
        button.list-group-item-success:hover {
            color: #3c763d;
            background-color: #d0e9c6
        }

        a.list-group-item-success.active,
        a.list-group-item-success.active:focus,
        a.list-group-item-success.active:hover,
        button.list-group-item-success.active,
        button.list-group-item-success.active:focus,
        button.list-group-item-success.active:hover {
            color: #fff;
            background-color: #3c763d;
            border-color: #3c763d
        }

        .list-group-item-info {
            color: #31708f;
            background-color: #d9edf7
        }

        a.list-group-item-info,
        button.list-group-item-info {
            color: #31708f
        }

        a.list-group-item-info .list-group-item-heading,
        button.list-group-item-info .list-group-item-heading {
            color: inherit
        }

        a.list-group-item-info:focus,
        a.list-group-item-info:hover,
        button.list-group-item-info:focus,
        button.list-group-item-info:hover {
            color: #31708f;
            background-color: #c4e3f3
        }

        a.list-group-item-info.active,
        a.list-group-item-info.active:focus,
        a.list-group-item-info.active:hover,
        button.list-group-item-info.active,
        button.list-group-item-info.active:focus,
        button.list-group-item-info.active:hover {
            color: #fff;
            background-color: #31708f;
            border-color: #31708f
        }

        .list-group-item-warning {
            color: #8a6d3b;
            background-color: #fcf8e3
        }

        a.list-group-item-warning,
        button.list-group-item-warning {
            color: #8a6d3b
        }

        a.list-group-item-warning .list-group-item-heading,
        button.list-group-item-warning .list-group-item-heading {
            color: inherit
        }

        a.list-group-item-warning:focus,
        a.list-group-item-warning:hover,
        button.list-group-item-warning:focus,
        button.list-group-item-warning:hover {
            color: #8a6d3b;
            background-color: #faf2cc
        }

        a.list-group-item-warning.active,
        a.list-group-item-warning.active:focus,
        a.list-group-item-warning.active:hover,
        button.list-group-item-warning.active,
        button.list-group-item-warning.active:focus,
        button.list-group-item-warning.active:hover {
            color: #fff;
            background-color: #8a6d3b;
            border-color: #8a6d3b
        }

        .list-group-item-danger {
            color: #a94442;
            background-color: #f2dede
        }

        a.list-group-item-danger,
        button.list-group-item-danger {
            color: #a94442
        }

        a.list-group-item-danger .list-group-item-heading,
        button.list-group-item-danger .list-group-item-heading {
            color: inherit
        }

        a.list-group-item-danger:focus,
        a.list-group-item-danger:hover,
        button.list-group-item-danger:focus,
        button.list-group-item-danger:hover {
            color: #a94442;
            background-color: #ebcccc
        }

        a.list-group-item-danger.active,
        a.list-group-item-danger.active:focus,
        a.list-group-item-danger.active:hover,
        button.list-group-item-danger.active,
        button.list-group-item-danger.active:focus,
        button.list-group-item-danger.active:hover {
            color: #fff;
            background-color: #a94442;
            border-color: #a94442
        }
    </style>

    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <link rel="canonical" href="http://localhost/index.php">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-yellow-light layout-top-nav">
    <div class="wrapper">

        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="noticias.php" class="navbar-brand"><b>Senac</b> EAD</a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="">Cursos</a></li>
                        </ul>

                    </div>

                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">
                <!-- Content Header (Page header) -->
                <section class="content-header">

                </section>

                <!-- Main content -->
                <section class="content  align-self-baseline">

                    <div class="row">
                        <div class="col-xs-12 col-md-4 col-sm-6">
                            <a href="#" class="thumbnail">
                                <amp-img src="assets/fotos/senac.jpg" layout="responsive" width="200" height="200" alt="senac"></amp-img>
                            </a>
                        </div>
                        <div class="col-xs-12 col-md-4 col-sm-6">
                            <a href="#" class="thumbnail">
                                <amp-img src="assets/fotos/senac.jpg" layout="responsive" width="200" height="200" alt="senac"></amp-img>
                            </a>
                        </div>
                        <div class="col-xs-12 col-md-4 col-sm-6">
                            <a href="#" class="thumbnail">
                                <amp-img src="assets/fotos/senac.jpg" layout="responsive" width="200" height="200" alt="senac"></amp-img>
                            </a>
                            <p>responsive web devices</p>
                        </div>

                    </div>
                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="container">

                footer

            </div>
            <!-- /.container -->
        </footer>
    </div>



    <!-- ./wrapper -->

    <!-- jQuery 3 -->

</body>

</html>

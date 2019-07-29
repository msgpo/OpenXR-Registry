<?php
$static_title = 'Khronos OpenXR Registry';
include_once("../../assets/static_pages/khr_page_top.php");
?>

<p> The OpenXR registry contains formatted specifications of the OpenXR API,
    header files, API reference pages, the reference card, and related
    documentation. The registry also links to the GitHub repository where
    the sources for these documents can be found. </p>

<p> Index to the OpenXR Registry page content: </p>

<ul>
    <li> <a href="#apispecs"/> <b>OpenXR 1.0 API Specifications</b> </a> </li>
    <li> <a href="#refpages"/> <b>OpenXR API Reference Pages</b> </a> </li>
    <li> <a href="#repos"/> <b>OpenXR GitHub Repositories</b>
        <ul>
        <li> <a href="#repo-docs"/> <b>API and Extension Specification Repository</b> </a>
            <ul>
            <li> <a href="#headers"/> <b>Header Files</b> </a> </li>
            <li> <a href="#apiregistry"/> <b>API Registry</b> </a> </li>
            </ul> </li>
        <li> <a href="#repo-loader"/> <b>Loader and Validation Layers Repositories</b> </a> </li>
        </ul> </li>
</ul>


<h2> <a name="apispecs"></a> <b>OpenXR 1.0 API Specifications</b> </h2>

<p> We currently publish the OpenXR API Specification in PDF and HTML forms.
    There are several versions of the OpenXR 1.0 Specification, as well as
    related Specifications and collateral material: </p>

<ul>
<li> <b>OpenXR 1.0 API + All Extensions</b>
     <a href="specs/1.0/html/xrspec.html">(Single-file HTML)</a>
     <a href="specs/1.0/pdf/xrspec.pdf">(PDF)</a> </li>
     This Specification includes Khronos-defined <tt>KHR</tt> extensions
     such as the graphics API interfaces used on different platforms 
     and window systems, as well as vendor-specific and multi-vendor
     <tt>EXT</tt> non-Khronos extensions. </li>
</ul>

<h2> <a name="refpages"></a> <b>API Reference Pages</b> </h2>

<p> The OpenXR API Reference Pages describe how to use individual API
    and extension commands. The goal is to define all commands and
    structures in the core API and extensions, although there may be some
    omissions in non-<tt>KHR</tt> extensions.</p>

<ul>
<li> <b>OpenXR 1.0 Reference Pages</b>
     <a href="specs/1.0/man/html/openxr.html">(Single-file HTML)</a>
     <a href="specs/1.0/man/html/">(HTML, one file per reference page)</a>
     </li>
</ul>

<p> The reference pages are generated by automatic extraction from the
    Specification source, and are not checked into GitHub. The set of pages
    linked above are generated from the 1.0 API specification including all
    extensions.</p>

<h2> <a name="repos"></a> <b> OpenXR GitHub Repositories </b> </h2>

<h3> <a name="repo-docs"></a> <b>API and Extension Specification Repository</b> </h3>

<p> The <a href="https://github.com/KhronosGroup/OpenXR-Docs">
    OpenXR-Docs</a> repository contains the AsciiDoc source for the OpenXR
    API specification, and for registered OpenXR API extensions. </p>

<p> OpenXR-Docs also contains the header files, API Registry, and
    reference page sources. </p>


<h4> <a name="headers"></a> <b>Header Files</b> </h4>

<p> For most developers, the header files provided with a loader and/or
    driver package, such as the one defined in the <a
    href="#repo-loader"> loader and validation layers</a> GitHub
    repository, are all that's needed. </p>

<p> However, all OpenXR headers provided by Khronos are ultimately obtained
    from the <a href="#repo-docs"> OpenXR-Docs</a> repository. You may clone
    this repository and copy the headers from <b>include/openxr/*.h</b>;
    or, if you need to generate a customized version of the headers, use the
    <a href="#apiregistry">API Registry</a> and scripts under
    <b>xml/</b>. </p>


<h4> <a name="apiregistry"></a> <b>API Registry</b> </h4>

<p> OpenXR defines an API Registry for the API and extensions,
    formally defining function prototypes, structures, enumerants, and
    many other aspects of the API and extension mechanisms. The OpenXR
    Registry is used for many more purposes than most other Khronos API
    registries, and is the basis for generating the header files;
    AsciiDoc include files used in the Specification, and reference
    pages for interface definitions, parameter and member validity
    language, and synchronization language; and more. </p>

<h3> <a name="repo-loader"></a> <b>Loader and Validation Layers Repositories</b> </h3>

<p> There are additional Khronos Github repositories containing OpenXR
    source code, libraries, and tools.

<ul>
<li> The <a href="https://github.com/KhronosGroup/OpenXR-SDK">
     OpenXR-SDK</a> repository contains the generated header files,
     as well as the source (including generated files) for the
     OpenXR loader that is used for Linux and Windows.
     Most application developers can use this repository,
     as it provides the header and loader with minimum dependencies. </li>
<li> The <a href="https://github.com/KhronosGroup/OpenXR-SDK-Source">
     OpenXR-SDK-Source</a> repository is where development of the loader takes place.
     It also contains the beta API layers and a sample application (<tt>hello_xr</tt>).
     Unlike OpenXR-SDK, it does not contain the generated source: you need
     Python 3.6 or newer on your system to compile this repository. </li>
</ul>



<?php include_once("../../assets/static_pages/khr_page_bottom.php"); ?>
</body>
</html>

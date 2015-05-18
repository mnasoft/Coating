SET NAMES 'utf8';
USE coating;

INSERT INTO MimeType (Обозначение, Описание) VALUES ('application/atom+xml', 'Atom feeds'),
('application/vnd.dart', 'Dart files [8]'),
('application/ecmascript', 'ECMAScript/JavaScript; Defined in RFC 4329 (equivalent to application/javascript but with stricter processing rules)'),
('application/EDI-X12', 'EDI X12 data; Defined in RFC 1767'),
('application/EDIFACT', 'EDI EDIFACT data; Defined in RFC 1767'),
('application/json', 'JavaScript Object Notation JSON; Defined in RFC 4627'),
('application/javascript', 'ECMAScript/JavaScript; Defined in RFC 4329 (equivalent to application/ecmascript but with looser processing rules) It is not accepted in IE 8 or earlier - text/javascript is accepted but it is defined as obsolete in RFC 4329. The "type" attribute of the <script> tag in HTML5 is optional. In practice, omitting the media type of JavaScript programs is the most interoperable solution, since all browsers have always assumed the correct default even before HTML5.'),
('application/octet-stream', 'Arbitrary binary data.[9] Generally speaking this type identifies files that are not associated with a specific application. Contrary to past assumptions by software packages such as Apache this is not a type that should be applied to unknown files. In such a case, a server or application should not indicate a content type, as it may be incorrect, but rather, should omit the type in order to allow the recipient to guess the type.[10]'),
('application/ogg', 'Ogg, a multimedia bitstream container format; Defined in RFC 5334'),
('application/dash+xml', 'MPEG-DASH, a multimedia streaming standard'),
('application/pdf', 'Portable Document Format, PDF has been in use for document exchange on the Internet since 1993; Defined in RFC 3778'),
('application/postscript', 'PostScript; Defined in RFC 2046'),
('application/rdf+xml', 'Resource Description Framework; Defined by RFC 3870'),
('application/rss+xml', 'RSS feeds'),
('application/soap+xml', 'SOAP; Defined by RFC 3902'),
('application/font-woff', 'Web Open Font Format; (candidate recommendation; use application/x-font-woff until standard is official)'),
('application/xhtml+xml', 'XHTML; Defined by RFC 3236'),
('application/xml', 'XML files; Defined by RFC 3023'),
('application/xml-dtd', 'DTD files; Defined by RFC 3023'),
('application/xop+xml', 'XOP'),
('application/zip', 'ZIP archive files; Registered[11]'),
('application/gzip', 'Gzip, Defined in RFC 6713'),
('application/example', 'example in documentation, Defined in RFC 4735'),
('application/x-nacl', 'Native Client web module (supplied via Google Web Store only)'),
('application/x-pnacl', 'Portable Native Client web module (may supplied by any website as it is safer than x-nacl)'),
('application/smil+xml', 'SMIL files; Defined REC-SMIL3-20081201'),
('audio/basic', 'μ-law audio at 8 kHz, 1 channel; Defined in RFC 2046'),
('audio/L24', '24bit Linear PCM audio at 8–48 kHz, 1-N channels; Defined in RFC 3190'),
('audio/mp4', 'MP4 audio'),
('audio/mpeg', 'MP3 or other MPEG audio; Defined in RFC 3003'),
('audio/ogg', 'Vorbis, Opus, Speex, Flac and other audio in an Ogg container; Defined in RFC 5334'),
('audio/flac', 'native Flac (Flac in its own container)'),
('audio/opus', 'Opus streamed audio'),
('audio/vorbis', 'Vorbis streamed audio; Defined in RFC 5215'),
('audio/vnd.rn-realaudio', 'RealAudio; Documented in RealPlayer Help[12]'),
('audio/vnd.wave', 'WAV audio; Defined in RFC 2361'),
('audio/webm', 'WebM open media format'),
('audio/example', 'example in documentation, Defined in RFC 4735'),
('example', 'Defined in RFC 4735'),
('image/gif', 'GIF image; Defined in RFC 2045 and RFC 2046'),
('image/jpeg', 'JPEG JFIF image; Defined in RFC 2045 and RFC 2046'),
('image/pjpeg', 'JPEG JFIF image; Associated with Internet Explorer; Listed in ms775147(v=vs.85) - Progressive JPEG, initiated before global browser support for progressive JPEGs (Microsoft and Firefox).'),
('image/png', 'Portable Network Graphics; Registered,[13] Defined in RFC 2083'),
('image/bmp', 'BMP file format;'),
('image/svg+xml', 'SVG vector image; Defined in SVG Tiny 1.2 Specification Appendix M'),
('image/tiff', 'TIF image;'),
('image/vnd.djvu', 'DjVu image and multipage document format.[14]'),
('image/example', 'example in documentation, Defined in RFC 4735'),
('message/http', 'Defined in RFC 7230'),
('message/imdn+xml', 'IMDN Instant Message Disposition Notification; Defined in RFC 5438'),
('message/partial', 'Email; Defined in RFC 2045 and RFC 2046'),
('message/rfc822', 'Email; EML files, MIME files, MHT files, MHTML files; Defined in RFC 2045 and RFC 2046'),
('message/example', 'example in documentation, Defined in RFC 4735'),
('model/iges', 'IGS files, IGES files; Defined in RFC 2077'),
('model/mesh', 'MSH files, MESH files; Defined in RFC 2077, SILO files'),
('model/vrml', 'WRL files, VRML files; Defined in RFC 2077'),
('model/x3d+binary', 'X3D ISO standard for representing 3D computer graphics, X3DB binary files - never Internet Assigned Numbers Authority approved'),
('model/x3d+fastinfoset', 'X3D ISO standard for representing 3D computer graphics, X3DB binary files (application in process, this replaces any use of model/x3d+binary)'),
('model/x3d-vrml', 'X3D ISO standard for representing 3D computer graphics, X3DV VRML files (application in process, previous uses may have been model/x3d+vrml)'),
('model/x3d+xml', 'X3D ISO standard for representing 3D computer graphics, X3D XML files'),
('model/example', 'example in documentation, Defined in RFC 4735'),
('multipart/mixed', 'MIME Email; Defined in RFC 2045 and RFC 2046'),
('multipart/alternative', 'MIME Email; Defined in RFC 2045 and RFC 2046'),
('multipart/related', 'MIME Email; Defined in RFC 2387 and used by MHTML (HTML mail)'),
('multipart/form-data', 'MIME Webform; Defined in RFC 2388'),
('multipart/signed', 'Defined in RFC 1847'),
('multipart/encrypted', 'Defined in RFC 1847'),
('multipart/example', 'example in documentation, Defined in RFC 4735'),
('text/cmd', 'commands; subtype resident in Gecko browsers like Firefox 3.5'),
('text/css', 'Cascading Style Sheets; Defined in RFC 2318'),
('text/csv', 'Comma-separated values; Defined in RFC 4180'),
('text/example', 'example in documentation, Defined in RFC 4735'),
('text/html', 'HTML; Defined in RFC 2854'),
('text/markdown', 'Markdown http://www.iana.org/assignments/media-types/text/markdown'),
('text/javascript (Obsolete)', 'JavaScript; Defined in and made obsolete in RFC 4329 in order to discourage its usage in favor of application/javascript. However, text/javascript is allowed in HTML 4 and 5 and, unlike application/javascript, has cross-browser support. The "type" attribute of the <script> tag in HTML5 is optional and there is no need to use it at all since all browsers have always assumed the correct default (even in HTML 4 where it was required by the specification).'),
('text/plain', 'Textual data; Defined in RFC 2046 and RFC 3676'),
('text/rtf', 'RTF; Defined by Paul Lindner'),
('text/vcard', 'vCard (contact information); Defined in RFC 6350'),
('text/vnd.a', 'The A language framework; Registered[15]'),
('text/vnd.abc', 'ABC music notation; Registered[16]'),
('text/xml', 'Extensible Markup Language; Defined in RFC 3023'),
('video/avi', 'Covers most Windows-compatible formats including .avi and .divx[17]'),
('video/example', 'example in documentation, Defined in RFC 4735'),
('video/mpeg', 'MPEG-1 video with multiplexed audio; Defined in RFC 2045 and RFC 2046'),
('video/mp4', 'MP4 video; Defined in RFC 4337'),
('video/ogg', 'Ogg Theora or other video (with audio); Defined in RFC 5334'),
('video/quicktime', 'QuickTime video; Registered[18]'),
('video/webm', 'WebM Matroska-based open media format'),
('video/x-matroska', 'Matroska open media format'),
('video/x-ms-wmv', 'Windows Media Video; Documented in Microsoft KB 288102'),
('video/x-flv', 'Flash video (FLV files)'),
('application/vnd.debian.binary-package', 'deb (file format), a software package format used by the Debian project; Registered[19]'),
('application/vnd.oasis.opendocument.text', 'OpenDocument Text; Registered[20]'),
('application/vnd.oasis.opendocument.spreadsheet', 'OpenDocument Spreadsheet; Registered[21]'),
('application/vnd.oasis.opendocument.presentation', 'OpenDocument Presentation; Registered[22]'),
('application/vnd.oasis.opendocument.graphics', 'OpenDocument Graphics; Registered[23]'),
('application/vnd.ms-excel', 'Microsoft Excel files'),
('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'Microsoft Excel 2007 files'),
('application/vnd.ms-powerpoint', 'Microsoft Powerpoint files'),
('application/vnd.openxmlformats-officedocument.presentationml.presentation', 'Microsoft Powerpoint 2007 files'),
('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'Microsoft Word 2007 files'),
('application/vnd.mozilla.xul+xml', 'Mozilla XUL files'),
('application/vnd.google-earth.kml+xml', 'KML files (e.g. for Google Earth)[24]'),
('application/vnd.google-earth.kmz', 'KMZ files (e.g. for Google Earth)[25]'),
('application/vnd.android.package-archive', 'For download apk files.'),
('application/vnd.ms-xpsdocument', 'XPS document[26]'),
('text/vnd.abc', 'ABC music notation; Registered[16]'),
('application/x-7z-compressed', '7-Zip compression format.'),
('application/x-chrome-extension', 'Google Chrome/Chrome OS extension, app, or theme package [28]'),
('application/x-dvi', 'device-independent document in DVI format'),
('application/x-font-ttf', 'TrueType Font No registered MIME type, but this is the most commonly used'),
('application/x-javascript:', ''),
('application/x-latex', 'LaTeX files'),
('application/x-mpegURL', '.m3u8 variant playlist'),
('application/x-rar-compressed', 'RAR archive files'),
('application/x-shockwave-flash', 'Adobe Flash files for example with the extension .swf'),
('application/x-stuffit', 'StuffIt archive files'),
('application/x-tar', 'Tarball files'),
('application/x-www-form-urlencoded', 'Form Encoded Data; Documented in HTML 4.01 Specification, Section 17.13.4.1'),
('application/x-xpinstall', 'Add-ons to Mozilla applications (Firefox, Thunderbird, SeaMonkey, and the discontinued Sunbird)'),
('audio/x-aac', '.aac audio files'),
('audio/x-caf', 'Apple`s CAF audio files'),
('image/x-xcf', 'GIMP image file'),
('text/x-gwt-rpc', 'GoogleWebToolkit data'),
('text/x-jquery-tmpl', 'jQuery template data'),
('text/x-markdown', 'Markdown formatted text'),
('application/x-pkcs12', 'a variant of PKCS standard files');
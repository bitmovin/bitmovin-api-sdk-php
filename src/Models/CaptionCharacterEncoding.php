<?php

namespace BitmovinApiSdk\Models;

class CaptionCharacterEncoding extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ANSI_X3_4_1968 = 'ANSI_X3.4-1968';

    /** @var string */
    private const ANSI_X3_4_1986 = 'ANSI_X3.4-1986';

    /** @var string */
    private const ARABIC = 'ARABIC';

    /** @var string */
    private const ARMSCII_8 = 'ARMSCII-8';

    /** @var string */
    private const ASCII = 'ASCII';

    /** @var string */
    private const ASMO_708 = 'ASMO-708';

    /** @var string */
    private const BIG_5 = 'BIG-5';

    /** @var string */
    private const BIG_FIVE = 'BIG-FIVE';

    /** @var string */
    private const BIG5 = 'BIG5';

    /** @var string */
    private const BIG5_HKSCS = 'BIG5-HKSCS';

    /** @var string */
    private const BIG5_HKSCS_1999 = 'BIG5-HKSCS:1999';

    /** @var string */
    private const BIG5_HKSCS_2001 = 'BIG5-HKSCS:2001';

    /** @var string */
    private const BIG5_HKSCS_2004 = 'BIG5-HKSCS:2004';

    /** @var string */
    private const BIG5_HKSCS_2008 = 'BIG5-HKSCS:2008';

    /** @var string */
    private const BIG5HKSCS = 'BIG5HKSCS';

    /** @var string */
    private const BIGFIVE = 'BIGFIVE';

    /** @var string */
    private const C99 = 'C99';

    /** @var string */
    private const CHAR = 'CHAR';

    /** @var string */
    private const CHINESE = 'CHINESE';

    /** @var string */
    private const CN = 'CN';

    /** @var string */
    private const CN_BIG5 = 'CN-BIG5';

    /** @var string */
    private const CN_GB = 'CN-GB';

    /** @var string */
    private const CN_GB_ISOIR165 = 'CN-GB-ISOIR165';

    /** @var string */
    private const CP1131 = 'CP1131';

    /** @var string */
    private const CP1133 = 'CP1133';

    /** @var string */
    private const CP1250 = 'CP1250';

    /** @var string */
    private const CP1251 = 'CP1251';

    /** @var string */
    private const CP1252 = 'CP1252';

    /** @var string */
    private const CP1253 = 'CP1253';

    /** @var string */
    private const CP1254 = 'CP1254';

    /** @var string */
    private const CP1255 = 'CP1255';

    /** @var string */
    private const CP1256 = 'CP1256';

    /** @var string */
    private const CP1257 = 'CP1257';

    /** @var string */
    private const CP1258 = 'CP1258';

    /** @var string */
    private const CP1361 = 'CP1361';

    /** @var string */
    private const CP154 = 'CP154';

    /** @var string */
    private const CP367 = 'CP367';

    /** @var string */
    private const CP819 = 'CP819';

    /** @var string */
    private const CP850 = 'CP850';

    /** @var string */
    private const CP862 = 'CP862';

    /** @var string */
    private const CP866 = 'CP866';

    /** @var string */
    private const CP874 = 'CP874';

    /** @var string */
    private const CP932 = 'CP932';

    /** @var string */
    private const CP936 = 'CP936';

    /** @var string */
    private const CP949 = 'CP949';

    /** @var string */
    private const CP950 = 'CP950';

    /** @var string */
    private const CSASCII = 'CSASCII';

    /** @var string */
    private const CSBIG5 = 'CSBIG5';

    /** @var string */
    private const CSEUCKR = 'CSEUCKR';

    /** @var string */
    private const CSEUCPKDFMTJAPANESE = 'CSEUCPKDFMTJAPANESE';

    /** @var string */
    private const CSEUCTW = 'CSEUCTW';

    /** @var string */
    private const CSGB2312 = 'CSGB2312';

    /** @var string */
    private const CSHALFWIDTHKATAKANA = 'CSHALFWIDTHKATAKANA';

    /** @var string */
    private const CSHPROMAN8 = 'CSHPROMAN8';

    /** @var string */
    private const CSIBM866 = 'CSIBM866';

    /** @var string */
    private const CSISO14JISC6220RO = 'CSISO14JISC6220RO';

    /** @var string */
    private const CSISO159JISX02121990 = 'CSISO159JISX02121990';

    /** @var string */
    private const CSISO2022CN = 'CSISO2022CN';

    /** @var string */
    private const CSISO2022JP = 'CSISO2022JP';

    /** @var string */
    private const CSISO2022JP2 = 'CSISO2022JP2';

    /** @var string */
    private const CSISO2022KR = 'CSISO2022KR';

    /** @var string */
    private const CSISO57GB1988 = 'CSISO57GB1988';

    /** @var string */
    private const CSISO58GB231280 = 'CSISO58GB231280';

    /** @var string */
    private const CSISO87JISX0208 = 'CSISO87JISX0208';

    /** @var string */
    private const CSISOLATIN1 = 'CSISOLATIN1';

    /** @var string */
    private const CSISOLATIN2 = 'CSISOLATIN2';

    /** @var string */
    private const CSISOLATIN3 = 'CSISOLATIN3';

    /** @var string */
    private const CSISOLATIN4 = 'CSISOLATIN4';

    /** @var string */
    private const CSISOLATIN5 = 'CSISOLATIN5';

    /** @var string */
    private const CSISOLATIN6 = 'CSISOLATIN6';

    /** @var string */
    private const CSISOLATINARABIC = 'CSISOLATINARABIC';

    /** @var string */
    private const CSISOLATINCYRILLIC = 'CSISOLATINCYRILLIC';

    /** @var string */
    private const CSISOLATINGREEK = 'CSISOLATINGREEK';

    /** @var string */
    private const CSISOLATINHEBREW = 'CSISOLATINHEBREW';

    /** @var string */
    private const CSKOI8R = 'CSKOI8R';

    /** @var string */
    private const CSKSC56011987 = 'CSKSC56011987';

    /** @var string */
    private const CSKZ1048 = 'CSKZ1048';

    /** @var string */
    private const CSMACINTOSH = 'CSMACINTOSH';

    /** @var string */
    private const CSPC850MULTILINGUAL = 'CSPC850MULTILINGUAL';

    /** @var string */
    private const CSPC862LATINHEBREW = 'CSPC862LATINHEBREW';

    /** @var string */
    private const CSPTCP154 = 'CSPTCP154';

    /** @var string */
    private const CSSHIFTJIS = 'CSSHIFTJIS';

    /** @var string */
    private const CSUCS4 = 'CSUCS4';

    /** @var string */
    private const CSUNICODE = 'CSUNICODE';

    /** @var string */
    private const CSUNICODE11 = 'CSUNICODE11';

    /** @var string */
    private const CSUNICODE11UTF7 = 'CSUNICODE11UTF7';

    /** @var string */
    private const CSVISCII = 'CSVISCII';

    /** @var string */
    private const CYRILLIC = 'CYRILLIC';

    /** @var string */
    private const CYRILLIC_ASIAN = 'CYRILLIC-ASIAN';

    /** @var string */
    private const ECMA_114 = 'ECMA-114';

    /** @var string */
    private const ECMA_118 = 'ECMA-118';

    /** @var string */
    private const ELOT_928 = 'ELOT_928';

    /** @var string */
    private const EUC_CN = 'EUC-CN';

    /** @var string */
    private const EUC_JP = 'EUC-JP';

    /** @var string */
    private const EUC_KR = 'EUC-KR';

    /** @var string */
    private const EUC_TW = 'EUC-TW';

    /** @var string */
    private const EUCCN = 'EUCCN';

    /** @var string */
    private const EUCJP = 'EUCJP';

    /** @var string */
    private const EUCKR = 'EUCKR';

    /** @var string */
    private const EUCTW = 'EUCTW';

    /** @var string */
    private const EXTENDED_UNIX_CODE_PACKED_FORMAT_FOR_JAPANESE = 'EXTENDED_UNIX_CODE_PACKED_FORMAT_FOR_JAPANESE';

    /** @var string */
    private const GB_1988_80 = 'GB_1988-80';

    /** @var string */
    private const GB_2312_80 = 'GB_2312-80';

    /** @var string */
    private const GB18030 = 'GB18030';

    /** @var string */
    private const GB2312 = 'GB2312';

    /** @var string */
    private const GBK = 'GBK';

    /** @var string */
    private const GEORGIAN_ACADEMY = 'GEORGIAN-ACADEMY';

    /** @var string */
    private const GEORGIAN_PS = 'GEORGIAN-PS';

    /** @var string */
    private const GREEK = 'GREEK';

    /** @var string */
    private const GREEK8 = 'GREEK8';

    /** @var string */
    private const HEBREW = 'HEBREW';

    /** @var string */
    private const HP_ROMAN8 = 'HP-ROMAN8';

    /** @var string */
    private const HZ = 'HZ';

    /** @var string */
    private const HZ_GB_2312 = 'HZ-GB-2312';

    /** @var string */
    private const IBM_CP1133 = 'IBM-CP1133';

    /** @var string */
    private const IBM367 = 'IBM367';

    /** @var string */
    private const IBM819 = 'IBM819';

    /** @var string */
    private const IBM850 = 'IBM850';

    /** @var string */
    private const IBM862 = 'IBM862';

    /** @var string */
    private const IBM866 = 'IBM866';

    /** @var string */
    private const ISO_10646_UCS_2 = 'ISO-10646-UCS-2';

    /** @var string */
    private const ISO_10646_UCS_4 = 'ISO-10646-UCS-4';

    /** @var string */
    private const ISO_2022_CN = 'ISO-2022-CN';

    /** @var string */
    private const ISO_2022_CN_EXT = 'ISO-2022-CN-EXT';

    /** @var string */
    private const ISO_2022_JP = 'ISO-2022-JP';

    /** @var string */
    private const ISO_2022_JP_1 = 'ISO-2022-JP-1';

    /** @var string */
    private const ISO_2022_JP_2 = 'ISO-2022-JP-2';

    /** @var string */
    private const ISO_2022_KR = 'ISO-2022-KR';

    /** @var string */
    private const ISO_8859_1 = 'ISO-8859-1';

    /** @var string */
    private const ISO_8859_10 = 'ISO-8859-10';

    /** @var string */
    private const ISO_8859_11 = 'ISO-8859-11';

    /** @var string */
    private const ISO_8859_13 = 'ISO-8859-13';

    /** @var string */
    private const ISO_8859_14 = 'ISO-8859-14';

    /** @var string */
    private const ISO_8859_15 = 'ISO-8859-15';

    /** @var string */
    private const ISO_8859_16 = 'ISO-8859-16';

    /** @var string */
    private const ISO_8859_2 = 'ISO-8859-2';

    /** @var string */
    private const ISO_8859_3 = 'ISO-8859-3';

    /** @var string */
    private const ISO_8859_4 = 'ISO-8859-4';

    /** @var string */
    private const ISO_8859_5 = 'ISO-8859-5';

    /** @var string */
    private const ISO_8859_6 = 'ISO-8859-6';

    /** @var string */
    private const ISO_8859_7 = 'ISO-8859-7';

    /** @var string */
    private const ISO_8859_8 = 'ISO-8859-8';

    /** @var string */
    private const ISO_8859_9 = 'ISO-8859-9';

    /** @var string */
    private const ISO_CELTIC = 'ISO-CELTIC';

    /** @var string */
    private const ISO_IR_100 = 'ISO-IR-100';

    /** @var string */
    private const ISO_IR_101 = 'ISO-IR-101';

    /** @var string */
    private const ISO_IR_109 = 'ISO-IR-109';

    /** @var string */
    private const ISO_IR_110 = 'ISO-IR-110';

    /** @var string */
    private const ISO_IR_126 = 'ISO-IR-126';

    /** @var string */
    private const ISO_IR_127 = 'ISO-IR-127';

    /** @var string */
    private const ISO_IR_138 = 'ISO-IR-138';

    /** @var string */
    private const ISO_IR_14 = 'ISO-IR-14';

    /** @var string */
    private const ISO_IR_144 = 'ISO-IR-144';

    /** @var string */
    private const ISO_IR_148 = 'ISO-IR-148';

    /** @var string */
    private const ISO_IR_149 = 'ISO-IR-149';

    /** @var string */
    private const ISO_IR_157 = 'ISO-IR-157';

    /** @var string */
    private const ISO_IR_159 = 'ISO-IR-159';

    /** @var string */
    private const ISO_IR_165 = 'ISO-IR-165';

    /** @var string */
    private const ISO_IR_166 = 'ISO-IR-166';

    /** @var string */
    private const ISO_IR_179 = 'ISO-IR-179';

    /** @var string */
    private const ISO_IR_199 = 'ISO-IR-199';

    /** @var string */
    private const ISO_IR_203 = 'ISO-IR-203';

    /** @var string */
    private const ISO_IR_226 = 'ISO-IR-226';

    /** @var string */
    private const ISO_IR_57 = 'ISO-IR-57';

    /** @var string */
    private const ISO_IR_58 = 'ISO-IR-58';

    /** @var string */
    private const ISO_IR_6 = 'ISO-IR-6';

    /** @var string */
    private const ISO_IR_87 = 'ISO-IR-87';

    /** @var string */
    private const ISO_646_IRV_1991 = 'ISO_646.IRV:1991';

    /** @var string */
    private const ISO_8859_1_1987 = 'ISO_8859-1:1987';

    /** @var string */
    private const ISO_8859_10_1992 = 'ISO_8859-10:1992';

    /** @var string */
    private const ISO_8859_14_1998 = 'ISO_8859-14:1998';

    /** @var string */
    private const ISO_8859_15_1998 = 'ISO_8859-15:1998';

    /** @var string */
    private const ISO_8859_16_2001 = 'ISO_8859-16:2001';

    /** @var string */
    private const ISO_8859_2_1987 = 'ISO_8859-2:1987';

    /** @var string */
    private const ISO_8859_3_1988 = 'ISO_8859-3:1988';

    /** @var string */
    private const ISO_8859_4_1988 = 'ISO_8859-4:1988';

    /** @var string */
    private const ISO_8859_5_1988 = 'ISO_8859-5:1988';

    /** @var string */
    private const ISO_8859_6_1987 = 'ISO_8859-6:1987';

    /** @var string */
    private const ISO_8859_7_1987 = 'ISO_8859-7:1987';

    /** @var string */
    private const ISO_8859_7_2003 = 'ISO_8859-7:2003';

    /** @var string */
    private const ISO_8859_8_1988 = 'ISO_8859-8:1988';

    /** @var string */
    private const ISO_8859_9_1989 = 'ISO_8859-9:1989';

    /** @var string */
    private const ISO646_CN = 'ISO646-CN';

    /** @var string */
    private const ISO646_JP = 'ISO646-JP';

    /** @var string */
    private const ISO646_US = 'ISO646-US';

    /** @var string */
    private const ISO8859_1 = 'ISO8859-1';

    /** @var string */
    private const ISO8859_10 = 'ISO8859-10';

    /** @var string */
    private const ISO8859_11 = 'ISO8859-11';

    /** @var string */
    private const ISO8859_13 = 'ISO8859-13';

    /** @var string */
    private const ISO8859_14 = 'ISO8859-14';

    /** @var string */
    private const ISO8859_15 = 'ISO8859-15';

    /** @var string */
    private const ISO8859_16 = 'ISO8859-16';

    /** @var string */
    private const ISO8859_2 = 'ISO8859-2';

    /** @var string */
    private const ISO8859_3 = 'ISO8859-3';

    /** @var string */
    private const ISO8859_4 = 'ISO8859-4';

    /** @var string */
    private const ISO8859_5 = 'ISO8859-5';

    /** @var string */
    private const ISO8859_6 = 'ISO8859-6';

    /** @var string */
    private const ISO8859_7 = 'ISO8859-7';

    /** @var string */
    private const ISO8859_8 = 'ISO8859-8';

    /** @var string */
    private const ISO8859_9 = 'ISO8859-9';

    /** @var string */
    private const JAVA = 'JAVA';

    /** @var string */
    private const JIS_C6220_1969_RO = 'JIS_C6220-1969-RO';

    /** @var string */
    private const JIS_C6226_1983 = 'JIS_C6226-1983';

    /** @var string */
    private const JIS_X0201 = 'JIS_X0201';

    /** @var string */
    private const JIS_X0208 = 'JIS_X0208';

    /** @var string */
    private const JIS_X0208_1983 = 'JIS_X0208-1983';

    /** @var string */
    private const JIS_X0208_1990 = 'JIS_X0208-1990';

    /** @var string */
    private const JIS_X0212 = 'JIS_X0212';

    /** @var string */
    private const JIS_X0212_1990 = 'JIS_X0212-1990';

    /** @var string */
    private const JIS_X0212_1990_0 = 'JIS_X0212.1990-0';

    /** @var string */
    private const JIS0208 = 'JIS0208';

    /** @var string */
    private const JISX0201_1976 = 'JISX0201-1976';

    /** @var string */
    private const JOHAB = 'JOHAB';

    /** @var string */
    private const JP = 'JP';

    /** @var string */
    private const KOI8_R = 'KOI8-R';

    /** @var string */
    private const KOI8_RU = 'KOI8-RU';

    /** @var string */
    private const KOI8_T = 'KOI8-T';

    /** @var string */
    private const KOI8_U = 'KOI8-U';

    /** @var string */
    private const KOREAN = 'KOREAN';

    /** @var string */
    private const KS_C_5601_1987 = 'KS_C_5601-1987';

    /** @var string */
    private const KS_C_5601_1989 = 'KS_C_5601-1989';

    /** @var string */
    private const KSC_5601 = 'KSC_5601';

    /** @var string */
    private const KZ_1048 = 'KZ-1048';

    /** @var string */
    private const L1 = 'L1';

    /** @var string */
    private const L10 = 'L10';

    /** @var string */
    private const L2 = 'L2';

    /** @var string */
    private const L3 = 'L3';

    /** @var string */
    private const L4 = 'L4';

    /** @var string */
    private const L5 = 'L5';

    /** @var string */
    private const L6 = 'L6';

    /** @var string */
    private const L7 = 'L7';

    /** @var string */
    private const L8 = 'L8';

    /** @var string */
    private const LATIN_9 = 'LATIN-9';

    /** @var string */
    private const LATIN1 = 'LATIN1';

    /** @var string */
    private const LATIN10 = 'LATIN10';

    /** @var string */
    private const LATIN2 = 'LATIN2';

    /** @var string */
    private const LATIN3 = 'LATIN3';

    /** @var string */
    private const LATIN4 = 'LATIN4';

    /** @var string */
    private const LATIN5 = 'LATIN5';

    /** @var string */
    private const LATIN6 = 'LATIN6';

    /** @var string */
    private const LATIN7 = 'LATIN7';

    /** @var string */
    private const LATIN8 = 'LATIN8';

    /** @var string */
    private const MAC = 'MAC';

    /** @var string */
    private const MACARABIC = 'MACARABIC';

    /** @var string */
    private const MACCENTRALEUROPE = 'MACCENTRALEUROPE';

    /** @var string */
    private const MACCROATIAN = 'MACCROATIAN';

    /** @var string */
    private const MACCYRILLIC = 'MACCYRILLIC';

    /** @var string */
    private const MACGREEK = 'MACGREEK';

    /** @var string */
    private const MACHEBREW = 'MACHEBREW';

    /** @var string */
    private const MACICELAND = 'MACICELAND';

    /** @var string */
    private const MACINTOSH = 'MACINTOSH';

    /** @var string */
    private const MACROMAN = 'MACROMAN';

    /** @var string */
    private const MACROMANIA = 'MACROMANIA';

    /** @var string */
    private const MACTHAI = 'MACTHAI';

    /** @var string */
    private const MACTURKISH = 'MACTURKISH';

    /** @var string */
    private const MACUKRAINE = 'MACUKRAINE';

    /** @var string */
    private const MS_ANSI = 'MS-ANSI';

    /** @var string */
    private const MS_ARAB = 'MS-ARAB';

    /** @var string */
    private const MS_CYRL = 'MS-CYRL';

    /** @var string */
    private const MS_EE = 'MS-EE';

    /** @var string */
    private const MS_GREEK = 'MS-GREEK';

    /** @var string */
    private const MS_HEBR = 'MS-HEBR';

    /** @var string */
    private const MS_TURK = 'MS-TURK';

    /** @var string */
    private const MS_KANJI = 'MS_KANJI';

    /** @var string */
    private const MS936 = 'MS936';

    /** @var string */
    private const MULELAO_1 = 'MULELAO-1';

    /** @var string */
    private const NEXTSTEP = 'NEXTSTEP';

    /** @var string */
    private const PT154 = 'PT154';

    /** @var string */
    private const PTCP154 = 'PTCP154';

    /** @var string */
    private const R8 = 'R8';

    /** @var string */
    private const RK1048 = 'RK1048';

    /** @var string */
    private const ROMAN8 = 'ROMAN8';

    /** @var string */
    private const SHIFT_JIS = 'SHIFT-JIS';

    /** @var string */
    private const SJIS = 'SJIS';

    /** @var string */
    private const STRK1048_2002 = 'STRK1048-2002';

    /** @var string */
    private const TCVN = 'TCVN';

    /** @var string */
    private const TCVN_5712 = 'TCVN-5712';

    /** @var string */
    private const TCVN5712_1 = 'TCVN5712-1';

    /** @var string */
    private const TCVN5712_1_1993 = 'TCVN5712-1:1993';

    /** @var string */
    private const TIS_620 = 'TIS-620';

    /** @var string */
    private const TIS620 = 'TIS620';

    /** @var string */
    private const TIS620_0 = 'TIS620-0';

    /** @var string */
    private const TIS620_2529_1 = 'TIS620.2529-1';

    /** @var string */
    private const TIS620_2533_0 = 'TIS620.2533-0';

    /** @var string */
    private const TIS620_2533_1 = 'TIS620.2533-1';

    /** @var string */
    private const UCS_2 = 'UCS-2';

    /** @var string */
    private const UCS_2_INTERNAL = 'UCS-2-INTERNAL';

    /** @var string */
    private const UCS_2_SWAPPED = 'UCS-2-SWAPPED';

    /** @var string */
    private const UCS_2BE = 'UCS-2BE';

    /** @var string */
    private const UCS_2LE = 'UCS-2LE';

    /** @var string */
    private const UCS_4 = 'UCS-4';

    /** @var string */
    private const UCS_4_INTERNAL = 'UCS-4-INTERNAL';

    /** @var string */
    private const UCS_4_SWAPPED = 'UCS-4-SWAPPED';

    /** @var string */
    private const UCS_4BE = 'UCS-4BE';

    /** @var string */
    private const UCS_4LE = 'UCS-4LE';

    /** @var string */
    private const UHC = 'UHC';

    /** @var string */
    private const UNICODE_1_1 = 'UNICODE-1-1';

    /** @var string */
    private const UNICODE_1_1_UTF_7 = 'UNICODE-1-1-UTF-7';

    /** @var string */
    private const UNICODEBIG = 'UNICODEBIG';

    /** @var string */
    private const UNICODELITTLE = 'UNICODELITTLE';

    /** @var string */
    private const US = 'US';

    /** @var string */
    private const US_ASCII = 'US-ASCII';

    /** @var string */
    private const UTF_16 = 'UTF-16';

    /** @var string */
    private const UTF_16BE = 'UTF-16BE';

    /** @var string */
    private const UTF_16LE = 'UTF-16LE';

    /** @var string */
    private const UTF_32 = 'UTF-32';

    /** @var string */
    private const UTF_32BE = 'UTF-32BE';

    /** @var string */
    private const UTF_32LE = 'UTF-32LE';

    /** @var string */
    private const UTF_7 = 'UTF-7';

    /** @var string */
    private const UTF_8 = 'UTF-8';

    /** @var string */
    private const VISCII = 'VISCII';

    /** @var string */
    private const VISCII1_1_1 = 'VISCII1.1-1';

    /** @var string */
    private const WCHAR_T = 'WCHAR_T';

    /** @var string */
    private const WINBALTRIM = 'WINBALTRIM';

    /** @var string */
    private const WINDOWS_1250 = 'WINDOWS-1250';

    /** @var string */
    private const WINDOWS_1251 = 'WINDOWS-1251';

    /** @var string */
    private const WINDOWS_1252 = 'WINDOWS-1252';

    /** @var string */
    private const WINDOWS_1253 = 'WINDOWS-1253';

    /** @var string */
    private const WINDOWS_1254 = 'WINDOWS-1254';

    /** @var string */
    private const WINDOWS_1255 = 'WINDOWS-1255';

    /** @var string */
    private const WINDOWS_1256 = 'WINDOWS-1256';

    /** @var string */
    private const WINDOWS_1257 = 'WINDOWS-1257';

    /** @var string */
    private const WINDOWS_1258 = 'WINDOWS-1258';

    /** @var string */
    private const WINDOWS_874 = 'WINDOWS-874';

    /** @var string */
    private const WINDOWS_936 = 'WINDOWS-936';

    /** @var string */
    private const X0201 = 'X0201';

    /** @var string */
    private const X0208 = 'X0208';

    /** @var string */
    private const X0212 = 'X0212';

    /**
     * @param string $value
     * @return CaptionCharacterEncoding
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ANSI_X3_4_1968()
    {
        return new CaptionCharacterEncoding(self::ANSI_X3_4_1968);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ANSI_X3_4_1986()
    {
        return new CaptionCharacterEncoding(self::ANSI_X3_4_1986);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ARABIC()
    {
        return new CaptionCharacterEncoding(self::ARABIC);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ARMSCII_8()
    {
        return new CaptionCharacterEncoding(self::ARMSCII_8);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ASCII()
    {
        return new CaptionCharacterEncoding(self::ASCII);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ASMO_708()
    {
        return new CaptionCharacterEncoding(self::ASMO_708);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function BIG_5()
    {
        return new CaptionCharacterEncoding(self::BIG_5);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function BIG_FIVE()
    {
        return new CaptionCharacterEncoding(self::BIG_FIVE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function BIG5()
    {
        return new CaptionCharacterEncoding(self::BIG5);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function BIG5_HKSCS()
    {
        return new CaptionCharacterEncoding(self::BIG5_HKSCS);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function BIG5_HKSCS_1999()
    {
        return new CaptionCharacterEncoding(self::BIG5_HKSCS_1999);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function BIG5_HKSCS_2001()
    {
        return new CaptionCharacterEncoding(self::BIG5_HKSCS_2001);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function BIG5_HKSCS_2004()
    {
        return new CaptionCharacterEncoding(self::BIG5_HKSCS_2004);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function BIG5_HKSCS_2008()
    {
        return new CaptionCharacterEncoding(self::BIG5_HKSCS_2008);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function BIG5HKSCS()
    {
        return new CaptionCharacterEncoding(self::BIG5HKSCS);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function BIGFIVE()
    {
        return new CaptionCharacterEncoding(self::BIGFIVE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function C99()
    {
        return new CaptionCharacterEncoding(self::C99);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CHAR()
    {
        return new CaptionCharacterEncoding(self::CHAR);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CHINESE()
    {
        return new CaptionCharacterEncoding(self::CHINESE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CN()
    {
        return new CaptionCharacterEncoding(self::CN);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CN_BIG5()
    {
        return new CaptionCharacterEncoding(self::CN_BIG5);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CN_GB()
    {
        return new CaptionCharacterEncoding(self::CN_GB);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CN_GB_ISOIR165()
    {
        return new CaptionCharacterEncoding(self::CN_GB_ISOIR165);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP1131()
    {
        return new CaptionCharacterEncoding(self::CP1131);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP1133()
    {
        return new CaptionCharacterEncoding(self::CP1133);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP1250()
    {
        return new CaptionCharacterEncoding(self::CP1250);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP1251()
    {
        return new CaptionCharacterEncoding(self::CP1251);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP1252()
    {
        return new CaptionCharacterEncoding(self::CP1252);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP1253()
    {
        return new CaptionCharacterEncoding(self::CP1253);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP1254()
    {
        return new CaptionCharacterEncoding(self::CP1254);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP1255()
    {
        return new CaptionCharacterEncoding(self::CP1255);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP1256()
    {
        return new CaptionCharacterEncoding(self::CP1256);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP1257()
    {
        return new CaptionCharacterEncoding(self::CP1257);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP1258()
    {
        return new CaptionCharacterEncoding(self::CP1258);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP1361()
    {
        return new CaptionCharacterEncoding(self::CP1361);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP154()
    {
        return new CaptionCharacterEncoding(self::CP154);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP367()
    {
        return new CaptionCharacterEncoding(self::CP367);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP819()
    {
        return new CaptionCharacterEncoding(self::CP819);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP850()
    {
        return new CaptionCharacterEncoding(self::CP850);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP862()
    {
        return new CaptionCharacterEncoding(self::CP862);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP866()
    {
        return new CaptionCharacterEncoding(self::CP866);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP874()
    {
        return new CaptionCharacterEncoding(self::CP874);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP932()
    {
        return new CaptionCharacterEncoding(self::CP932);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP936()
    {
        return new CaptionCharacterEncoding(self::CP936);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP949()
    {
        return new CaptionCharacterEncoding(self::CP949);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CP950()
    {
        return new CaptionCharacterEncoding(self::CP950);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSASCII()
    {
        return new CaptionCharacterEncoding(self::CSASCII);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSBIG5()
    {
        return new CaptionCharacterEncoding(self::CSBIG5);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSEUCKR()
    {
        return new CaptionCharacterEncoding(self::CSEUCKR);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSEUCPKDFMTJAPANESE()
    {
        return new CaptionCharacterEncoding(self::CSEUCPKDFMTJAPANESE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSEUCTW()
    {
        return new CaptionCharacterEncoding(self::CSEUCTW);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSGB2312()
    {
        return new CaptionCharacterEncoding(self::CSGB2312);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSHALFWIDTHKATAKANA()
    {
        return new CaptionCharacterEncoding(self::CSHALFWIDTHKATAKANA);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSHPROMAN8()
    {
        return new CaptionCharacterEncoding(self::CSHPROMAN8);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSIBM866()
    {
        return new CaptionCharacterEncoding(self::CSIBM866);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISO14JISC6220RO()
    {
        return new CaptionCharacterEncoding(self::CSISO14JISC6220RO);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISO159JISX02121990()
    {
        return new CaptionCharacterEncoding(self::CSISO159JISX02121990);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISO2022CN()
    {
        return new CaptionCharacterEncoding(self::CSISO2022CN);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISO2022JP()
    {
        return new CaptionCharacterEncoding(self::CSISO2022JP);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISO2022JP2()
    {
        return new CaptionCharacterEncoding(self::CSISO2022JP2);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISO2022KR()
    {
        return new CaptionCharacterEncoding(self::CSISO2022KR);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISO57GB1988()
    {
        return new CaptionCharacterEncoding(self::CSISO57GB1988);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISO58GB231280()
    {
        return new CaptionCharacterEncoding(self::CSISO58GB231280);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISO87JISX0208()
    {
        return new CaptionCharacterEncoding(self::CSISO87JISX0208);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISOLATIN1()
    {
        return new CaptionCharacterEncoding(self::CSISOLATIN1);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISOLATIN2()
    {
        return new CaptionCharacterEncoding(self::CSISOLATIN2);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISOLATIN3()
    {
        return new CaptionCharacterEncoding(self::CSISOLATIN3);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISOLATIN4()
    {
        return new CaptionCharacterEncoding(self::CSISOLATIN4);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISOLATIN5()
    {
        return new CaptionCharacterEncoding(self::CSISOLATIN5);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISOLATIN6()
    {
        return new CaptionCharacterEncoding(self::CSISOLATIN6);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISOLATINARABIC()
    {
        return new CaptionCharacterEncoding(self::CSISOLATINARABIC);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISOLATINCYRILLIC()
    {
        return new CaptionCharacterEncoding(self::CSISOLATINCYRILLIC);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISOLATINGREEK()
    {
        return new CaptionCharacterEncoding(self::CSISOLATINGREEK);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSISOLATINHEBREW()
    {
        return new CaptionCharacterEncoding(self::CSISOLATINHEBREW);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSKOI8R()
    {
        return new CaptionCharacterEncoding(self::CSKOI8R);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSKSC56011987()
    {
        return new CaptionCharacterEncoding(self::CSKSC56011987);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSKZ1048()
    {
        return new CaptionCharacterEncoding(self::CSKZ1048);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSMACINTOSH()
    {
        return new CaptionCharacterEncoding(self::CSMACINTOSH);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSPC850MULTILINGUAL()
    {
        return new CaptionCharacterEncoding(self::CSPC850MULTILINGUAL);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSPC862LATINHEBREW()
    {
        return new CaptionCharacterEncoding(self::CSPC862LATINHEBREW);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSPTCP154()
    {
        return new CaptionCharacterEncoding(self::CSPTCP154);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSSHIFTJIS()
    {
        return new CaptionCharacterEncoding(self::CSSHIFTJIS);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSUCS4()
    {
        return new CaptionCharacterEncoding(self::CSUCS4);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSUNICODE()
    {
        return new CaptionCharacterEncoding(self::CSUNICODE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSUNICODE11()
    {
        return new CaptionCharacterEncoding(self::CSUNICODE11);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSUNICODE11UTF7()
    {
        return new CaptionCharacterEncoding(self::CSUNICODE11UTF7);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CSVISCII()
    {
        return new CaptionCharacterEncoding(self::CSVISCII);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CYRILLIC()
    {
        return new CaptionCharacterEncoding(self::CYRILLIC);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function CYRILLIC_ASIAN()
    {
        return new CaptionCharacterEncoding(self::CYRILLIC_ASIAN);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ECMA_114()
    {
        return new CaptionCharacterEncoding(self::ECMA_114);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ECMA_118()
    {
        return new CaptionCharacterEncoding(self::ECMA_118);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ELOT_928()
    {
        return new CaptionCharacterEncoding(self::ELOT_928);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function EUC_CN()
    {
        return new CaptionCharacterEncoding(self::EUC_CN);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function EUC_JP()
    {
        return new CaptionCharacterEncoding(self::EUC_JP);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function EUC_KR()
    {
        return new CaptionCharacterEncoding(self::EUC_KR);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function EUC_TW()
    {
        return new CaptionCharacterEncoding(self::EUC_TW);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function EUCCN()
    {
        return new CaptionCharacterEncoding(self::EUCCN);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function EUCJP()
    {
        return new CaptionCharacterEncoding(self::EUCJP);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function EUCKR()
    {
        return new CaptionCharacterEncoding(self::EUCKR);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function EUCTW()
    {
        return new CaptionCharacterEncoding(self::EUCTW);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function EXTENDED_UNIX_CODE_PACKED_FORMAT_FOR_JAPANESE()
    {
        return new CaptionCharacterEncoding(self::EXTENDED_UNIX_CODE_PACKED_FORMAT_FOR_JAPANESE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function GB_1988_80()
    {
        return new CaptionCharacterEncoding(self::GB_1988_80);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function GB_2312_80()
    {
        return new CaptionCharacterEncoding(self::GB_2312_80);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function GB18030()
    {
        return new CaptionCharacterEncoding(self::GB18030);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function GB2312()
    {
        return new CaptionCharacterEncoding(self::GB2312);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function GBK()
    {
        return new CaptionCharacterEncoding(self::GBK);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function GEORGIAN_ACADEMY()
    {
        return new CaptionCharacterEncoding(self::GEORGIAN_ACADEMY);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function GEORGIAN_PS()
    {
        return new CaptionCharacterEncoding(self::GEORGIAN_PS);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function GREEK()
    {
        return new CaptionCharacterEncoding(self::GREEK);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function GREEK8()
    {
        return new CaptionCharacterEncoding(self::GREEK8);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function HEBREW()
    {
        return new CaptionCharacterEncoding(self::HEBREW);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function HP_ROMAN8()
    {
        return new CaptionCharacterEncoding(self::HP_ROMAN8);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function HZ()
    {
        return new CaptionCharacterEncoding(self::HZ);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function HZ_GB_2312()
    {
        return new CaptionCharacterEncoding(self::HZ_GB_2312);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function IBM_CP1133()
    {
        return new CaptionCharacterEncoding(self::IBM_CP1133);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function IBM367()
    {
        return new CaptionCharacterEncoding(self::IBM367);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function IBM819()
    {
        return new CaptionCharacterEncoding(self::IBM819);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function IBM850()
    {
        return new CaptionCharacterEncoding(self::IBM850);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function IBM862()
    {
        return new CaptionCharacterEncoding(self::IBM862);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function IBM866()
    {
        return new CaptionCharacterEncoding(self::IBM866);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_10646_UCS_2()
    {
        return new CaptionCharacterEncoding(self::ISO_10646_UCS_2);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_10646_UCS_4()
    {
        return new CaptionCharacterEncoding(self::ISO_10646_UCS_4);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_2022_CN()
    {
        return new CaptionCharacterEncoding(self::ISO_2022_CN);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_2022_CN_EXT()
    {
        return new CaptionCharacterEncoding(self::ISO_2022_CN_EXT);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_2022_JP()
    {
        return new CaptionCharacterEncoding(self::ISO_2022_JP);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_2022_JP_1()
    {
        return new CaptionCharacterEncoding(self::ISO_2022_JP_1);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_2022_JP_2()
    {
        return new CaptionCharacterEncoding(self::ISO_2022_JP_2);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_2022_KR()
    {
        return new CaptionCharacterEncoding(self::ISO_2022_KR);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_1()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_1);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_10()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_10);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_11()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_11);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_13()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_13);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_14()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_14);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_15()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_15);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_16()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_16);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_2()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_2);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_3()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_3);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_4()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_4);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_5()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_5);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_6()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_6);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_7()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_7);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_8()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_8);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_9()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_9);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_CELTIC()
    {
        return new CaptionCharacterEncoding(self::ISO_CELTIC);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_100()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_100);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_101()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_101);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_109()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_109);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_110()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_110);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_126()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_126);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_127()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_127);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_138()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_138);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_14()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_14);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_144()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_144);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_148()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_148);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_149()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_149);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_157()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_157);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_159()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_159);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_165()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_165);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_166()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_166);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_179()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_179);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_199()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_199);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_203()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_203);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_226()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_226);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_57()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_57);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_58()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_58);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_6()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_6);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_IR_87()
    {
        return new CaptionCharacterEncoding(self::ISO_IR_87);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_646_IRV_1991()
    {
        return new CaptionCharacterEncoding(self::ISO_646_IRV_1991);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_1_1987()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_1_1987);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_10_1992()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_10_1992);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_14_1998()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_14_1998);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_15_1998()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_15_1998);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_16_2001()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_16_2001);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_2_1987()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_2_1987);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_3_1988()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_3_1988);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_4_1988()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_4_1988);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_5_1988()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_5_1988);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_6_1987()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_6_1987);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_7_1987()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_7_1987);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_7_2003()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_7_2003);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_8_1988()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_8_1988);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO_8859_9_1989()
    {
        return new CaptionCharacterEncoding(self::ISO_8859_9_1989);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO646_CN()
    {
        return new CaptionCharacterEncoding(self::ISO646_CN);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO646_JP()
    {
        return new CaptionCharacterEncoding(self::ISO646_JP);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO646_US()
    {
        return new CaptionCharacterEncoding(self::ISO646_US);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO8859_1()
    {
        return new CaptionCharacterEncoding(self::ISO8859_1);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO8859_10()
    {
        return new CaptionCharacterEncoding(self::ISO8859_10);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO8859_11()
    {
        return new CaptionCharacterEncoding(self::ISO8859_11);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO8859_13()
    {
        return new CaptionCharacterEncoding(self::ISO8859_13);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO8859_14()
    {
        return new CaptionCharacterEncoding(self::ISO8859_14);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO8859_15()
    {
        return new CaptionCharacterEncoding(self::ISO8859_15);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO8859_16()
    {
        return new CaptionCharacterEncoding(self::ISO8859_16);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO8859_2()
    {
        return new CaptionCharacterEncoding(self::ISO8859_2);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO8859_3()
    {
        return new CaptionCharacterEncoding(self::ISO8859_3);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO8859_4()
    {
        return new CaptionCharacterEncoding(self::ISO8859_4);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO8859_5()
    {
        return new CaptionCharacterEncoding(self::ISO8859_5);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO8859_6()
    {
        return new CaptionCharacterEncoding(self::ISO8859_6);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO8859_7()
    {
        return new CaptionCharacterEncoding(self::ISO8859_7);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO8859_8()
    {
        return new CaptionCharacterEncoding(self::ISO8859_8);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ISO8859_9()
    {
        return new CaptionCharacterEncoding(self::ISO8859_9);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function JAVA()
    {
        return new CaptionCharacterEncoding(self::JAVA);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function JIS_C6220_1969_RO()
    {
        return new CaptionCharacterEncoding(self::JIS_C6220_1969_RO);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function JIS_C6226_1983()
    {
        return new CaptionCharacterEncoding(self::JIS_C6226_1983);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function JIS_X0201()
    {
        return new CaptionCharacterEncoding(self::JIS_X0201);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function JIS_X0208()
    {
        return new CaptionCharacterEncoding(self::JIS_X0208);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function JIS_X0208_1983()
    {
        return new CaptionCharacterEncoding(self::JIS_X0208_1983);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function JIS_X0208_1990()
    {
        return new CaptionCharacterEncoding(self::JIS_X0208_1990);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function JIS_X0212()
    {
        return new CaptionCharacterEncoding(self::JIS_X0212);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function JIS_X0212_1990()
    {
        return new CaptionCharacterEncoding(self::JIS_X0212_1990);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function JIS_X0212_1990_0()
    {
        return new CaptionCharacterEncoding(self::JIS_X0212_1990_0);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function JIS0208()
    {
        return new CaptionCharacterEncoding(self::JIS0208);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function JISX0201_1976()
    {
        return new CaptionCharacterEncoding(self::JISX0201_1976);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function JOHAB()
    {
        return new CaptionCharacterEncoding(self::JOHAB);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function JP()
    {
        return new CaptionCharacterEncoding(self::JP);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function KOI8_R()
    {
        return new CaptionCharacterEncoding(self::KOI8_R);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function KOI8_RU()
    {
        return new CaptionCharacterEncoding(self::KOI8_RU);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function KOI8_T()
    {
        return new CaptionCharacterEncoding(self::KOI8_T);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function KOI8_U()
    {
        return new CaptionCharacterEncoding(self::KOI8_U);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function KOREAN()
    {
        return new CaptionCharacterEncoding(self::KOREAN);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function KS_C_5601_1987()
    {
        return new CaptionCharacterEncoding(self::KS_C_5601_1987);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function KS_C_5601_1989()
    {
        return new CaptionCharacterEncoding(self::KS_C_5601_1989);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function KSC_5601()
    {
        return new CaptionCharacterEncoding(self::KSC_5601);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function KZ_1048()
    {
        return new CaptionCharacterEncoding(self::KZ_1048);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function L1()
    {
        return new CaptionCharacterEncoding(self::L1);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function L10()
    {
        return new CaptionCharacterEncoding(self::L10);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function L2()
    {
        return new CaptionCharacterEncoding(self::L2);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function L3()
    {
        return new CaptionCharacterEncoding(self::L3);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function L4()
    {
        return new CaptionCharacterEncoding(self::L4);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function L5()
    {
        return new CaptionCharacterEncoding(self::L5);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function L6()
    {
        return new CaptionCharacterEncoding(self::L6);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function L7()
    {
        return new CaptionCharacterEncoding(self::L7);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function L8()
    {
        return new CaptionCharacterEncoding(self::L8);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function LATIN_9()
    {
        return new CaptionCharacterEncoding(self::LATIN_9);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function LATIN1()
    {
        return new CaptionCharacterEncoding(self::LATIN1);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function LATIN10()
    {
        return new CaptionCharacterEncoding(self::LATIN10);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function LATIN2()
    {
        return new CaptionCharacterEncoding(self::LATIN2);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function LATIN3()
    {
        return new CaptionCharacterEncoding(self::LATIN3);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function LATIN4()
    {
        return new CaptionCharacterEncoding(self::LATIN4);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function LATIN5()
    {
        return new CaptionCharacterEncoding(self::LATIN5);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function LATIN6()
    {
        return new CaptionCharacterEncoding(self::LATIN6);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function LATIN7()
    {
        return new CaptionCharacterEncoding(self::LATIN7);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function LATIN8()
    {
        return new CaptionCharacterEncoding(self::LATIN8);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MAC()
    {
        return new CaptionCharacterEncoding(self::MAC);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MACARABIC()
    {
        return new CaptionCharacterEncoding(self::MACARABIC);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MACCENTRALEUROPE()
    {
        return new CaptionCharacterEncoding(self::MACCENTRALEUROPE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MACCROATIAN()
    {
        return new CaptionCharacterEncoding(self::MACCROATIAN);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MACCYRILLIC()
    {
        return new CaptionCharacterEncoding(self::MACCYRILLIC);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MACGREEK()
    {
        return new CaptionCharacterEncoding(self::MACGREEK);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MACHEBREW()
    {
        return new CaptionCharacterEncoding(self::MACHEBREW);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MACICELAND()
    {
        return new CaptionCharacterEncoding(self::MACICELAND);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MACINTOSH()
    {
        return new CaptionCharacterEncoding(self::MACINTOSH);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MACROMAN()
    {
        return new CaptionCharacterEncoding(self::MACROMAN);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MACROMANIA()
    {
        return new CaptionCharacterEncoding(self::MACROMANIA);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MACTHAI()
    {
        return new CaptionCharacterEncoding(self::MACTHAI);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MACTURKISH()
    {
        return new CaptionCharacterEncoding(self::MACTURKISH);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MACUKRAINE()
    {
        return new CaptionCharacterEncoding(self::MACUKRAINE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MS_ANSI()
    {
        return new CaptionCharacterEncoding(self::MS_ANSI);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MS_ARAB()
    {
        return new CaptionCharacterEncoding(self::MS_ARAB);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MS_CYRL()
    {
        return new CaptionCharacterEncoding(self::MS_CYRL);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MS_EE()
    {
        return new CaptionCharacterEncoding(self::MS_EE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MS_GREEK()
    {
        return new CaptionCharacterEncoding(self::MS_GREEK);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MS_HEBR()
    {
        return new CaptionCharacterEncoding(self::MS_HEBR);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MS_TURK()
    {
        return new CaptionCharacterEncoding(self::MS_TURK);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MS_KANJI()
    {
        return new CaptionCharacterEncoding(self::MS_KANJI);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MS936()
    {
        return new CaptionCharacterEncoding(self::MS936);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function MULELAO_1()
    {
        return new CaptionCharacterEncoding(self::MULELAO_1);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function NEXTSTEP()
    {
        return new CaptionCharacterEncoding(self::NEXTSTEP);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function PT154()
    {
        return new CaptionCharacterEncoding(self::PT154);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function PTCP154()
    {
        return new CaptionCharacterEncoding(self::PTCP154);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function R8()
    {
        return new CaptionCharacterEncoding(self::R8);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function RK1048()
    {
        return new CaptionCharacterEncoding(self::RK1048);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function ROMAN8()
    {
        return new CaptionCharacterEncoding(self::ROMAN8);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function SHIFT_JIS()
    {
        return new CaptionCharacterEncoding(self::SHIFT_JIS);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function SJIS()
    {
        return new CaptionCharacterEncoding(self::SJIS);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function STRK1048_2002()
    {
        return new CaptionCharacterEncoding(self::STRK1048_2002);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function TCVN()
    {
        return new CaptionCharacterEncoding(self::TCVN);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function TCVN_5712()
    {
        return new CaptionCharacterEncoding(self::TCVN_5712);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function TCVN5712_1()
    {
        return new CaptionCharacterEncoding(self::TCVN5712_1);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function TCVN5712_1_1993()
    {
        return new CaptionCharacterEncoding(self::TCVN5712_1_1993);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function TIS_620()
    {
        return new CaptionCharacterEncoding(self::TIS_620);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function TIS620()
    {
        return new CaptionCharacterEncoding(self::TIS620);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function TIS620_0()
    {
        return new CaptionCharacterEncoding(self::TIS620_0);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function TIS620_2529_1()
    {
        return new CaptionCharacterEncoding(self::TIS620_2529_1);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function TIS620_2533_0()
    {
        return new CaptionCharacterEncoding(self::TIS620_2533_0);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function TIS620_2533_1()
    {
        return new CaptionCharacterEncoding(self::TIS620_2533_1);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UCS_2()
    {
        return new CaptionCharacterEncoding(self::UCS_2);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UCS_2_INTERNAL()
    {
        return new CaptionCharacterEncoding(self::UCS_2_INTERNAL);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UCS_2_SWAPPED()
    {
        return new CaptionCharacterEncoding(self::UCS_2_SWAPPED);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UCS_2BE()
    {
        return new CaptionCharacterEncoding(self::UCS_2BE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UCS_2LE()
    {
        return new CaptionCharacterEncoding(self::UCS_2LE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UCS_4()
    {
        return new CaptionCharacterEncoding(self::UCS_4);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UCS_4_INTERNAL()
    {
        return new CaptionCharacterEncoding(self::UCS_4_INTERNAL);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UCS_4_SWAPPED()
    {
        return new CaptionCharacterEncoding(self::UCS_4_SWAPPED);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UCS_4BE()
    {
        return new CaptionCharacterEncoding(self::UCS_4BE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UCS_4LE()
    {
        return new CaptionCharacterEncoding(self::UCS_4LE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UHC()
    {
        return new CaptionCharacterEncoding(self::UHC);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UNICODE_1_1()
    {
        return new CaptionCharacterEncoding(self::UNICODE_1_1);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UNICODE_1_1_UTF_7()
    {
        return new CaptionCharacterEncoding(self::UNICODE_1_1_UTF_7);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UNICODEBIG()
    {
        return new CaptionCharacterEncoding(self::UNICODEBIG);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UNICODELITTLE()
    {
        return new CaptionCharacterEncoding(self::UNICODELITTLE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function US()
    {
        return new CaptionCharacterEncoding(self::US);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function US_ASCII()
    {
        return new CaptionCharacterEncoding(self::US_ASCII);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UTF_16()
    {
        return new CaptionCharacterEncoding(self::UTF_16);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UTF_16BE()
    {
        return new CaptionCharacterEncoding(self::UTF_16BE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UTF_16LE()
    {
        return new CaptionCharacterEncoding(self::UTF_16LE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UTF_32()
    {
        return new CaptionCharacterEncoding(self::UTF_32);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UTF_32BE()
    {
        return new CaptionCharacterEncoding(self::UTF_32BE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UTF_32LE()
    {
        return new CaptionCharacterEncoding(self::UTF_32LE);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UTF_7()
    {
        return new CaptionCharacterEncoding(self::UTF_7);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function UTF_8()
    {
        return new CaptionCharacterEncoding(self::UTF_8);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function VISCII()
    {
        return new CaptionCharacterEncoding(self::VISCII);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function VISCII1_1_1()
    {
        return new CaptionCharacterEncoding(self::VISCII1_1_1);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function WCHAR_T()
    {
        return new CaptionCharacterEncoding(self::WCHAR_T);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function WINBALTRIM()
    {
        return new CaptionCharacterEncoding(self::WINBALTRIM);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function WINDOWS_1250()
    {
        return new CaptionCharacterEncoding(self::WINDOWS_1250);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function WINDOWS_1251()
    {
        return new CaptionCharacterEncoding(self::WINDOWS_1251);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function WINDOWS_1252()
    {
        return new CaptionCharacterEncoding(self::WINDOWS_1252);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function WINDOWS_1253()
    {
        return new CaptionCharacterEncoding(self::WINDOWS_1253);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function WINDOWS_1254()
    {
        return new CaptionCharacterEncoding(self::WINDOWS_1254);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function WINDOWS_1255()
    {
        return new CaptionCharacterEncoding(self::WINDOWS_1255);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function WINDOWS_1256()
    {
        return new CaptionCharacterEncoding(self::WINDOWS_1256);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function WINDOWS_1257()
    {
        return new CaptionCharacterEncoding(self::WINDOWS_1257);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function WINDOWS_1258()
    {
        return new CaptionCharacterEncoding(self::WINDOWS_1258);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function WINDOWS_874()
    {
        return new CaptionCharacterEncoding(self::WINDOWS_874);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function WINDOWS_936()
    {
        return new CaptionCharacterEncoding(self::WINDOWS_936);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function X0201()
    {
        return new CaptionCharacterEncoding(self::X0201);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function X0208()
    {
        return new CaptionCharacterEncoding(self::X0208);
    }

    /**
     * Character encoding of the SRT file
     *
     * @return CaptionCharacterEncoding
     */
    public static function X0212()
    {
        return new CaptionCharacterEncoding(self::X0212);
    }
}


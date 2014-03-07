/*Owner & Copyrights: Vance King Saxbe. A.*//*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 

$mk = 0;
  for ( $ft = 0; $ft <= 2; $ft++) {$quote = "";$Start = getTime();
$quote = file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:20MICRONS,NSE:3IINFOTECH,NSE:3MINDIA,NSE:A2ZMES,NSE:AANJANEYA,NSE:AARTIDRUGS,NSE:AARTIIND,NSE:AARVEEDEN,NSE:ABAN,NSE:ABB,NSE:ABBOTINDIA,NSE:ABCIL,NSE:ABGSHIP,NSE:ABHISHEK,NSE:ABIRLANUVO,NSE:ACC,NSE:ACE,NSE:ACROPETAL,NSE:ADANIENT,NSE:ADANIPORTS,NSE:ADANIPOWER,NSE:ADFFOODS,NSE:ADHUNIK,NSE:ADORWELD,NSE:ADSL,NSE:ADVANIHOTR,NSE:ADVANTA,NSE:AEGISCHEM,NSE:AFL,NSE:AFTEK,NSE:AGCNET,NSE:AGRODUTCH,NSE:AHLEAST,NSE:AHLUCONT,NSE:AHLWEST,NSE:AHMEDFORGE,NSE:AIAENG,NSE:AJANTPHARM,NSE:AJMERA,NSE:AKSHOPTFBR,NSE:AKZOINDIA,NSE:ALBK,NSE:ALCHEM,NSE:ALEMBICLTD,NSE:ALICON,NSE:ALKALI,NSE:ALKYLAMINE,NSE:ALLCARGO,NSE:ALLSEC,NSE:ALMONDZ,NSE:ALOKTEXT,NSE:ALPA,NSE:ALPHAGEO,NSE:ALPINEHOU,NSE:ALPSINDUS,NSE:ALSTOMT&D,NSE:AMAR,NSE:AMARAJABAT,NSE:AMARJOTHI,NSE:AMBIKCO,NSE:AMBUJACEM,NSE:AMDIND,NSE:AMLSTEEL,NSE:AMRUTANJAN,NSE:AMTEKAUTO,NSE:AMTEKINDIA,NSE:ANANTRAJ,NSE:ANDHRABANK,NSE:ANDHRACEMT,NSE:ANDHRSUGAR,NSE:ANGIND,NSE:ANIKINDS,NSE:ANKURDRUGS,NSE:ANSALAPI,NSE:ANSALHSG,NSE:ANTGRAPHIC,NSE:APARINDS,NSE:APCOTEXIND,NSE:APIL,NSE:APLAPOLLO,NSE:APLLTD,NSE:APOLLOHOSP,NSE:APOLLOTYRE,NSE:APPAPER,NSE:APTECHT,NSE:AQUA,NSE:ARCHIDPLY,NSE:ARCHIES,NSE:ARIES,NSE:AROGRANITE,NSE:ARROWTEX,NSE:ARSHIYA,NSE:ARSSINFRA,NSE:ARVIND,NSE:ARVINDREM,NSE:ASAHIINDIA,NSE:ASAHISONG,NSE:ASAL,NSE:ASHAPURMIN,NSE:ASHCONIUL,NSE:ASHIANA,NSE:ASHIMASYN,NSE:ASHOKA,NSE:ASHOKLEY,NSE:ASIANELEC,NSE:ASIANHOTNR,NSE:ASIANPAINT,NSE:ASIANTILES,NSE:ASIL,NSE:ASSAMCO,NSE:ASTEC,NSE:ASTERSILI,NSE:ASTRAL,NSE:ASTRAMICRO,NSE:ASTRAZEN,NSE:ATFL,NSE:ATLANTA,NSE:ATLASCYCLE,NSE:ATNINTER,NSE:ATUL,NSE:AURIONPRO,NSE:AUROPHARMA,NSE:AUSTRAL,NSE:AUTOAXLES,NSE:AUTOIND,NSE:AUTOLITIND,NSE:AVANTI,NSE:AVENTIS,NSE:AVTNPL,NSE:AXIS-IT&T,NSE:AXISBANK,NSE:AXISGOLD,NSE:BAGFILMS,NSE:BAJAJ-AUTO,NSE:BAJAJCORP,NSE:BAJAJELEC,NSE:BAJAJFINSV,NSE:BAJAJHIND,NSE:BAJAJHLDNG,NSE:BAJFINANCE,NSE:BALAJITELE,NSE:BALAMINES,NSE:BALKRISIND,NSE:BALLARPUR,NSE:BALMLAWRIE,NSE:BALPHARMA,NSE:BALRAMCHIN,NSE:BANARISUG,NSE:BANCOINDIA,NSE:BANG,NSE:BANKBARODA');
  $quote = $quote.file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:BANKBEES,NSE:BANKINDIA,NSE:BANSWRAS,NSE:BARTRONICS,NSE:BASF,NSE:BASML,NSE:BATAINDIA,NSE:BATLIBOI,NSE:BAYERCROP,NSE:BBL,NSE:BBTC,NSE:BEARDSELL,NSE:BECREL,NSE:BEDMUTHA,NSE:BEL,NSE:BEML,NSE:BEPL,NSE:BERGEPAINT,NSE:BFINVEST,NSE:BFUTILITIE,NSE:BGLOBAL,NSE:BGRENERGY,NSE:BHAGWATIHO,NSE:BHAGYNAGAR,NSE:BHARATFORG,NSE:BHARATGEAR,NSE:BHARATRAS,NSE:BHARTIARTL,NSE:BHARTISHIP,NSE:BHEL,NSE:BHUSANSTL,NSE:BIL,NSE:BILENERGY,NSE:BILPOWER,NSE:BIMETAL,NSE:BINANIIND,NSE:BINDALAGRO,NSE:BIOCON,NSE:BIRLACORPN,NSE:BIRLACOT,NSE:BIRLAERIC,NSE:BIRLAMONEY,NSE:BIRLAPOWER,NSE:BLBLIMITED,NSE:BLISSGVS,NSE:BLKASHYAP,NSE:BLUECHIP,NSE:BLUEDART,NSE:BLUESTARCO,NSE:BLUESTINFO,NSE:BOC,NSE:BODALCHEM,NSE:BOMDYEING,NSE:BOSCHLTD,NSE:BPCL,NSE:BPL,NSE:BRANDHOUSE,NSE:BRFL,NSE:BRIGADE,NSE:BRITANNIA,NSE:BRITANNIA,NSE:BROADCAST,NSE:BROOKS,NSE:BSELINFRA,NSE:BSL,NSE:BSLGOLDETF,NSE:BSLNIFTY,NSE:BSTRANSCOM,NSE:BURNPUR,NSE:BVCL,NSE:CADILAHC,NSE:CAIRN,NSE:CALSOFT,NSE:CAMBRIDGE,NSE:CANBK,NSE:CANDC,NSE:CANFINHOME,NSE:CANTABIL,NSE:CARBORUNIV,NSE:CAREERP,NSE:CASTROL,NSE:CCCL,NSE:CCL,NSE:CEATLTD,NSE:CEBBCO,NSE:CELEBRITY,NSE:CELESTIAL,NSE:CENTENKA,NSE:CENTEXT,NSE:CENTRALBK,NSE:CENTUM,NSE:CENTURYPLY,NSE:CENTURYTEX,NSE:CERA,NSE:CESC,NSE:CHAMBLFERT,NSE:CHEMFALKAL,NSE:CHEMPLAST,NSE:CHENNPETRO,NSE:CHESLINTEX,NSE:CHETTINAD,NSE:CHOLAFIN,NSE:CHROMATIC,NSE:CILNOVA,NSE:CINEPRO,NSE:CINEVISTA,NSE:CIPLA,NSE:CLASSIC,NSE:CLNINDIA,NSE:CLUTCHAUTO,NSE:CMAHENDRA,NSE:CMC,NSE:COALINDIA,NSE:COLPAL,NSE:COMPUAGE,NSE:COMPUSOFT,NSE:CONCOR,NSE:CONSOFINVT,NSE:CORAL-HUB,NSE:CORDSCABLE,NSE:COREEDUTEC,NSE:COROENGG,NSE:COROMANDEL,NSE:CORPBANK,NSE:COSMOFILMS,NSE:COX&KINGS,NSE:CREATIVEYE,NSE:CRESTANI,NSE:CREWBOS,NSE:CRISIL,NSE:CRMFGETF,NSE:CROMPGREAV,NSE:CUB,NSE:CUBEXTUB,NSE:CUMMINSIND,NSE:CURATECH,NSE:CYBERMEDIA,NSE:CYBERTECH,NSE:DAAWAT,NSE:DABUR,NSE:DALMIABEL,NSE:DALMIASUG,NSE:DATAMATICS,NSE:DBCORP,NSE:DBREALTY,NSE:DBSTOCKBRO,NSE:DCB,NSE:DCHL,NSE:DCM,NSE:DCMSRMCONS');
$quote = file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:DCW,NSE:DECCANCE,NSE:DECOLIGHT,NSE:DEEPAKFERT,NSE:DEEPAKNTR,NSE:DEEPIND,NSE:DELTACORP,NSE:DEN,NSE:DENABANK,NSE:DENORA,NSE:DENSO,NSE:DHAMPURSUG,NSE:DHANBANK,NSE:DHANUKA,NSE:DHANUS,NSE:DHARSUGAR,NSE:DHFL,NSE:DIAPOWER,NSE:DICIND,NSE:DIGJAM,NSE:DISHMAN,NSE:DISHTV,NSE:DIVISLAB,NSE:DLF,NSE:DLINKINDIA,NSE:DOLPHINOFF,NSE:DONEAR,NSE:DPSCLTD,NSE:DPTL,NSE:DQE,NSE:DREDGECORP,NSE:DRREDDY,NSE:DRREDDY,NSE:DSKULKARNI,NSE:DSSL,NSE:DUNCANSIND,NSE:DWARKESH,NSE:DYNAMATECH,NSE:EASTSILK,NSE:EASUNREYRL,NSE:ECEIND,NSE:ECLERX,NSE:EDELWEISS,NSE:EDL,NSE:EDSERV,NSE:EDUCOMP,NSE:EICHERMOT,NSE:EIDPARRY,NSE:EIHAHOTELS,NSE:EIHOTEL,NSE:EIMCOELECO,NSE:EKC,NSE:ELDERPHARM,NSE:ELECON,NSE:ELECTCAST,NSE:ELECTHERM,NSE:ELFORGE,NSE:ELGIEQUIP,NSE:ELGIRUBCO,NSE:ELNET,NSE:EMAMIINFRA,NSE:EMAMILTD,NSE:EMCO,NSE:EMKAY,NSE:EMMBI,NSE:EMPEESUG,NSE:ENERGYDEV,NSE:ENGINERSIN,NSE:ENIL,NSE:ENTEGRA,NSE:EON,NSE:ERAINFRA,NSE:EROSMEDIA,NSE:ESABINDIA,NSE:ESCORTS,NSE:ESL,NSE:ESSAROIL,NSE:ESSARPORTS,NSE:ESSARSHPNG,NSE:ESSDEE,NSE:ESSELPACK,NSE:ESTER,NSE:EUROMULTI,NSE:EVEREADY,NSE:EVERESTIND,NSE:EVERONN,NSE:EXCELCROP,NSE:EXCELINDUS,NSE:EXCELINFO,NSE:EXIDEIND,NSE:FACT,NSE:FAGBEARING,NSE:FAME,NSE:FARMAXIND,NSE:FCH,NSE:FCSSOFT,NSE:FDC,NSE:FEDDERLOYD,NSE:FEDERALBNK,NSE:FIEMIND,NSE:FILATEX,NSE:FINANTECH,NSE:FINCABLES,NSE:FINPIPE,NSE:FIRSTLEASE,NSE:FIRSTWIN,NSE:FKONCO,NSE:FLEXITUFF,NSE:FMGOETZE,NSE:FMNL,NSE:FORTIS,NSE:FOSECOIND,NSE:FOURSOFT,NSE:FSL,NSE:FUTUREVENT,NSE:GABRIEL,NSE:GAEL,NSE:GAIL,NSE:GAL,NSE:GALLANTT,NSE:GALLISPAT,NSE:GAMMNINFRA,NSE:GAMMONIND,NSE:GANDHITUBE,NSE:GANESHHOUC,NSE:GANGOTRI,NSE:GARDENSILK,NSE:GARWALLROP,NSE:GATI,NSE:GAYAPROJ,NSE:GDL,NSE:GEINDSYS,NSE:GEMINI,NSE:GENESYS,NSE:GENUSPOWER,NSE:GEODESIC,NSE:GEOJITBNPP,NSE:GEOMETRIC,NSE:GESHIP,NSE:GHCL,NSE:GICHSGFIN,NSE:GILLANDERS,NSE:GILLETTE,NSE:GINNIFILA,NSE:GIPCL,NSE:GITANJALI,NSE:GKWLIMITED,NSE:GLAXO,NSE:GLENMARK,NSE:GLFL');
 $quote = file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:GLOBALVECT,NSE:GLOBOFFS,NSE:GLOBUSSPR,NSE:GLODYNE,NSE:GLORY,NSE:GMBREW,NSE:GMDCLTD,NSE:GMRINFRA,NSE:GNFC,NSE:GOACARBON,NSE:GODFRYPHLP,NSE:GODREJCP,NSE:GODREJIND,NSE:GODREJPROP,NSE:GOENKA,NSE:GOKEX,NSE:GOKUL,NSE:GOLDBEES,NSE:GOLDENTOBC,NSE:GOLDIAM,NSE:GOLDINFRA,NSE:GOLDSHARE,NSE:GOLDTECH,NSE:GPIL,NSE:GPPL,NSE:GRANULES,NSE:GRAPHITE,NSE:GRASIM,NSE:GRAVITA,NSE:GREAVESCOT,NSE:GREENPLY,NSE:GREENPOWER,NSE:GRINDWELL,NSE:GRUH,NSE:GSFC,NSE:GSKCONS,NSE:GSPL,NSE:GSS,NSE:GTL,NSE:GTLINFRA,NSE:GTNIND,NSE:GTNTEX,NSE:GTOFFSHORE,NSE:GUFICBIO,NSE:GUJALKALI,NSE:GUJAPOLLO,NSE:GUJFLUORO,NSE:GUJNRECOKE,NSE:GUJNREDVR,NSE:GUJRATGAS,NSE:GUJSIDHCEM,NSE:GULFOILCOR,NSE:GVKPIL,NSE:HALONIX,NSE:HANUNG,NSE:HARITASEAT,NSE:HARRMALAYA,NSE:HATHWAY,NSE:HAVELLS,NSE:HBLPOWER,NSE:HBSTOCK,NSE:HCC,NSE:HCIL,NSE:HCL-INSYS,NSE:HCLTECH,NSE:HDFC,NSE:HDFC,NSE:HDFCBANK,NSE:HDFCMFGETF,NSE:HDIL,NSE:HEG,NSE:HEIDELBERG,NSE:HELIOSMATH,NSE:HERCULES,NSE:HERITGFOOD,NSE:HEROMOTOCO,NSE:HEXATRADEX,NSE:HEXAWARE,NSE:HFCL,NSE:HGS,NSE:HIKAL,NSE:HILTON,NSE:HIMATSEIDE,NSE:HINDALCO,NSE:HINDCOPPER,NSE:HINDDORROL,NSE:HINDMOTORS,NSE:HINDNATGLS,NSE:HINDOILEXP,NSE:HINDPETRO,NSE:HINDUJAFO,NSE:HINDUJAVEN,NSE:HINDUNILVR,NSE:HINDZINC,NSE:HIRAFERRO,NSE:HIRECT,NSE:HITACHIHOM,NSE:HITECHGEAR,NSE:HITECHPLAS,NSE:HMT,NSE:HMVL,NSE:HNGSNGBEES,NSE:HOCL,NSE:HONAUT,NSE:HONDAPOWER,NSE:HOPFL,NSE:HORIZONINF,NSE:HOTELEELA,NSE:HOTELRUGBY,NSE:HOVS,NSE:HSIL,NSE:HTMEDIA,NSE:HUBTOWN,NSE:HUDCO,NSE:HUDCO,NSE:HYDRBADIND,NSE:HYDROS&S,NSE:IBPOW,NSE:IBREALEST,NSE:IBSEC,NSE:IBWSL,NSE:ICICIBANK,NSE:ICIL,NSE:ICRA,NSE:ICSA,NSE:IDBI,NSE:IDBIGOLD,NSE:IDEA,NSE:IDFC,NSE:IFBAGRO,NSE:IFBIND,NSE:IFCI,NSE:IFGLREFRAC,NSE:IGARASHI,NSE:IGL,NSE:IGPL,NSE:IIFLFMPS1G,NSE:IIFLNIFTY,NSE:IIISL,NSE:IIISL,NSE:IIISL,NSE:IL&FSENGG,NSE:IL&FSTRANS,NSE:IMFA,NSE:IMPAL,NSE:IMPEXFERRO,NSE:INDBANK,NSE:INDHOTEL,NSE:INDIABULLS,NSE:INDIACEM');
 $quote = file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:INDIAGLYCO,NSE:INDIAINFO,NSE:INDIANB,NSE:INDIANCARD,NSE:INDIANHUME,NSE:INDLMETER,NSE:INDNIPPON,NSE:INDOCO,NSE:INDORAMA,NSE:INDOSOLAR,NSE:INDOTECH,NSE:INDOTHAI,NSE:INDOWIND,NSE:INDRAMEDCO,NSE:INDSWFTLAB,NSE:INDSWFTLTD,NSE:INDTERRAIN,NSE:INDUSFILA,NSE:INDUSINDBK,NSE:INDUSINDBK,NSE:INEABS,NSE:INFINITE,NSE:INFODRIVE,NSE:INFOMEDIA,NSE:INFOTECENT,NSE:INFRABEES,NSE:INFY,NSE:INGERRAND,NSE:INGVYSYABK,NSE:INNOIND,NSE:INOXLEISUR,NSE:INSECTICID,NSE:INVENTURE,NSE:IOB,NSE:IOC,NSE:IOLCP,NSE:IOLN,NSE:IPCALAB,NSE:IPGETF,NSE:IPRINGLTD,NSE:IRB,NSE:IRFC,NSE:IRFC,NSE:ISMTLTD,NSE:ITC,NSE:ITDCEM,NSE:ITI,NSE:IVC,NSE:IVP,NSE:IVRCLAH,NSE:IVRCLINFRA,NSE:J&KBANK,NSE:JAGRAN,NSE:JAGSNPHARM,NSE:JAIBALAJI,NSE:JAICORPLTD,NSE:JAIHINDPRO,NSE:JAINSTUDIO,NSE:JAMNAAUTO,NSE:JAYAGROGN,NSE:JAYBARMARU,NSE:JAYNECOIND,NSE:JAYSREETEA,NSE:JBCHEPHARM,NSE:JBFIND,NSE:JBMA,NSE:JCTEL,NSE:JDORGOCHEM,NSE:JENSONICOL,NSE:JETAIRWAYS,NSE:JEYPORE,NSE:JHS,NSE:JIKIND,NSE:JINDALPHOT,NSE:JINDALPOLY,NSE:JINDALSAW,NSE:JINDALSTEL,NSE:JINDALSWHL,NSE:JINDCOT,NSE:JINDRILL,NSE:JINDWORLD,NSE:JISLDVREQS,NSE:JISLJALEQS,NSE:JKCEMENT,NSE:JKIL,NSE:JKLAKSHMI,NSE:JKPAPER,NSE:JKTYRE,NSE:JMCPROJECT,NSE:JMFINANCIL,NSE:JOCIL,NSE:JPASSOCIAT,NSE:JPINFRATEC,NSE:JPPOWER,NSE:JSL,NSE:JSWENERGY,NSE:JSWISPAT,NSE:JSWISPAT,NSE:JSWSTEEL,NSE:JUBILANT,NSE:JUBLFOOD,NSE:JUBLINDS,NSE:JUMBO,NSE:JUNIORBEES,NSE:JUPITER,NSE:JVLAGRO,NSE:JYOTHYLAB,NSE:JYOTISTRUC,NSE:KABRAEXTRU,NSE:KAJARIACER,NSE:KAKATCEM,NSE:KALECONSUL,NSE:KALINDEE,NSE:KALPATPOWR,NSE:KAMATHOTEL,NSE:KANANIIND,NSE:KANORICHEM,NSE:KANSAINER,NSE:KARMAENG,NSE:KARURVYSYA,NSE:KAUSHALYA,NSE:KAVVERITEL,NSE:KBIL,NSE:KCP,NSE:KCPSUGIND,NSE:KEC,NSE:KECL,NSE:KEI,NSE:KEMROCK,NSE:KERNEX,NSE:KESORAMIND,NSE:KFA,NSE:KGL,NSE:KHAITANELE,NSE:KHANDSE,NSE:KICL,NSE:KIL,NSE:KILITCH,NSE:KINETICMOT,NSE:KIRIINDUS,NSE:KIRLOSBROS,NSE:KIRLOSENG,NSE:KIRLOSIND,NSE:KITPLYIND,NSE:KKCL,NSE:KLGSYSTEL,NSE:KLRF,NSE:KMSUGAR,NSE:KNRCON,NSE:KOHINOOR');
 $quote = file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:KOKUYOCMLN,NSE:KOLTEPATIL,NSE:KOPDRUGS,NSE:KOPRAN,NSE:KOTAKBANK,NSE:KOTAKGOLD,NSE:KOTAKNIFTY,NSE:KOTAKPSUBK,NSE:KOTARISUG,NSE:KOTHARIPET,NSE:KOTHARIPRO,NSE:KOVAI,NSE:KPIT,NSE:KPRMILL,NSE:KRBL,NSE:KSBPUMPS,NSE:KSCL,NSE:KSE,NSE:KSERASERA,NSE:KSK,NSE:KSL,NSE:KSOILS,NSE:KTIL,NSE:KTKBANK,NSE:KWALITY,NSE:L&TFH,NSE:L&TFINANCE,NSE:L&TFINANCE,NSE:L&TFINANCE,NSE:L&TFINANCE,NSE:L&TFINANCE,NSE:LAKPRE,NSE:LAKSHMIEFL,NSE:LAKSHMIMIL,NSE:LAKSHVILAS,NSE:LANCOIN,NSE:LAOPALA,NSE:LAXMIMACH,NSE:LCCINFOTEC,NSE:LGBBROSLTD,NSE:LGBFORGE,NSE:LIBERTSHOE,NSE:LICHSGFIN,NSE:LIQUIDBEES,NSE:LITL,NSE:LLOYDELENG,NSE:LLOYDFIN,NSE:LLOYDSTEEL,NSE:LML,NSE:LOGIXMICRO,NSE:LOKESHMACH,NSE:LOTUSEYE,NSE:LOVABLE,NSE:LPDC,NSE:LT,NSE:LUMAXAUTO,NSE:LUMAXIND,NSE:LUMAXTECH,NSE:LUPIN,NSE:LYKALABS,NSE:M&M,NSE:M&MFIN,NSE:M100,NSE:M50,NSE:MAANALU,NSE:MADHAV,NSE:MADHUCON,NSE:MADRASCEM,NSE:MADRASFERT,NSE:MAGMA,NSE:MAGNUM,NSE:MAHABANK,NSE:MAHINDFORG,NSE:MAHINDUGIN,NSE:MAHLIFE,NSE:MAHSCOOTER,NSE:MAHSEAMLES,NSE:MAITHANALL,NSE:MALUPAPER,NSE:MALWACOTT,NSE:MANAKSIA,NSE:MANALIPETC,NSE:MANAPPURAM,NSE:MANDHANA,NSE:MANGALAM,NSE:MANGCHEFER,NSE:MANGLMCEM,NSE:MANGTIMBER,NSE:MANINDS,NSE:MANINFRA,NSE:MANJUSHREE,NSE:MANUGRAPH,NSE:MARALOVER,NSE:MARG,NSE:MARICO,NSE:MARKSANS,NSE:MARUTI,NSE:MASTEK,NSE:MAWANASUG,NSE:MAX,NSE:MAXWELL,NSE:MBECL,NSE:MBLINFRA,NSE:MBSWITCH,NSE:MCDHOLDING,NSE:MCDOWELL-N,NSE:MCLEODRUSS,NSE:MCX,NSE:MEGASOFT,NSE:MEGH,NSE:MELSTAR,NSE:MERCATOR,NSE:MERCK,NSE:METKORE,NSE:MGOLD,NSE:MHRIL,NSE:MIC,NSE:MICROSEC,NSE:MICROTECH,NSE:MINDAIND,NSE:MINDTREE,NSE:MIRCELECTR,NSE:MIRZAINT,NSE:MMFL,NSE:MMFSL,NSE:MMTC,NSE:MOIL,NSE:MONNETISPA,NSE:MONSANTO,NSE:MOREPENLAB,NSE:MOSERBAER,NSE:MOTHERSUMI,NSE:MOTILALOFS,NSE:MOTOGENFIN,NSE:MPHASIS,NSE:MPSLTD,NSE:MRF,NSE:MRO-TEK,NSE:MRPL,NSE:MSPL,NSE:MTEDUCARE,NSE:MTNL,NSE:MUDRA,NSE:MUKANDENGG,NSE:MUKANDLTD,NSE:MUKTAARTS,NSE:MUNJALAU,NSE:MUNJALSHOW,NSE:MURLIIND,NSE:MURUDCERA');
 $quote = file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:MUTHOOTFIN,NSE:MUTHOOTFIN,NSE:MUTHOOTFIN,NSE:MUTHOOTFIN,NSE:MVL,NSE:MVLIND,NSE:MYSOREBANK,NSE:N100,NSE:NAGAROIL,NSE:NAGREEKEXP,NSE:NAHARCAP,NSE:NAHARINDUS,NSE:NAHARPOLY,NSE:NAHARSPING,NSE:NANDANEXIM,NSE:NATCOPHARM,NSE:NATHSEED,NSE:NATIONALUM,NSE:NATNLSTEEL,NSE:NAUKRI,NSE:NAVINFLUOR,NSE:NAVNETPUBL,NSE:NBCC,NSE:NBVENTURES,NSE:NCC,NSE:NCLIND,NSE:NCOPPER,NSE:NDTV,NSE:NECLIFE,NSE:NEHAINT,NSE:NELCAST,NSE:NELCO,NSE:NEOCORP,NSE:NEOCURE,NSE:NEPCMICON,NSE:NESCO,NSE:NESTLEIND,NSE:NET4,NSE:NETWORK18,NSE:NETWORK18,NSE:NEULANDLAB,NSE:NEXTMEDIA,NSE:NEYVELILIG,NSE:NFL,NSE:NHAI,NSE:NHAI,NSE:NHPC,NSE:NICCO,NSE:NIFTYBEES,NSE:NIITLTD,NSE:NIITTECH,NSE:NILKAMAL,NSE:NIPPOBATRY,NSE:NITCO,NSE:NITESHEST,NSE:NITINFIRE,NSE:NITINSPIN,NSE:NMDC,NSE:NOCIL,NSE:NOIDATOLL,NSE:NOL,NSE:NORBTEAEXP,NSE:NORTHGATE,NSE:NOVOPANIND,NSE:NRBBEARING,NSE:NRC,NSE:NSIL,NSE:NTPC,NSE:NUCENT,NSE:NUCLEUS,NSE:NUMERICPW,NSE:NUTEK,NSE:OBEROIRLTY,NSE:OCL,NSE:OFSS,NSE:OIL,NSE:OILCOUNTUB,NSE:OISL,NSE:OMAXAUTO,NSE:OMAXE,NSE:OMKARCHEM,NSE:OMMETALS,NSE:OMNITECH,NSE:ONELIFECAP,NSE:ONGC,NSE:ONMOBILE,NSE:ONWARDTEC,NSE:OPTOCIRCUI,NSE:ORBITCORP,NSE:ORCHIDCHEM,NSE:ORIENTABRA,NSE:ORIENTBANK,NSE:ORIENTBELL,NSE:ORIENTHOT,NSE:ORIENTLTD,NSE:ORIENTPPR,NSE:ORIENTREF,NSE:ORISSAMINE,NSE:OSWALMIN,NSE:OUDHSUG,NSE:PAEL,NSE:PAGEIND,NSE:PANACEABIO,NSE:PANAMAPET,NSE:PANASONIC,NSE:PANCARBON,NSE:PANORAMUNI,NSE:PANTALOONR,NSE:PAPERPROD,NSE:PARABDRUGS,NSE:PARACABLES,NSE:PARAL,NSE:PARAPRINT,NSE:PARASPETRO,NSE:PARRYSUGAR,NSE:PARSVNATH,NSE:PATELENG,NSE:PATINTLOG,NSE:PATSPINLTD,NSE:PBAINFRA,NSE:PDPL,NSE:PDUMJEIND,NSE:PDUMJEPULP,NSE:PEARLPOLY,NSE:PENIND,NSE:PENINLAND,NSE:PERIATEA,NSE:PERSISTENT,NSE:PETRONENGG,NSE:PETRONET,NSE:PFC,NSE:PFIZER,NSE:PFOCUS,NSE:PFS,NSE:PGEL,NSE:PGHH,NSE:PHILIPCARB,NSE:PHOENIXLTD,NSE:PIDILITIND,NSE:PIIND,NSE:PILANIINV,NSE:PIONDIST,NSE:PIONEEREMB,NSE:PIPAVAVDOC,NSE:PIRGLASS,NSE:PIRHEALTH,NSE:PIRLIFE,NSE:PITTILAM,NSE:PLASTIBLEN,NSE:PLETHICO');
$quote = file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:PNB,NSE:PNBGILTS,NSE:PNC,NSE:POCHIRAJU,NSE:POLARIND,NSE:POLARIS,NSE:POLYMED,NSE:POLYPLEX,NSE:PONDYOXIDE,NSE:PONNIERODE,NSE:POWERGRID,NSE:PPAP,NSE:PRADIP,NSE:PRAENG,NSE:PRAJIND,NSE:PRAKASH,NSE:PRAKASHCON,NSE:PRAKASHSTL,NSE:PRATIBHA,NSE:PRECOT,NSE:PRECWIRE,NSE:PREMIER,NSE:PRESTIGE,NSE:PRETAILDVR,NSE:PRICOL,NSE:PRIMESECU,NSE:PRISMCEM,NSE:PRITHVI,NSE:PROVOGE,NSE:PSB,NSE:PSL,NSE:PSUBNKBEES,NSE:PTC,NSE:PTL,NSE:PUNJABCHEM,NSE:PUNJLLOYD,NSE:PURVA,NSE:PVP,NSE:PVR,NSE:QGOLDHALF,NSE:QNIFTY,NSE:QUINTEGRA,NSE:RADAAN,NSE:RADICO,NSE:RAINBOWPAP,NSE:RAINCOM,NSE:RAJESHEXPO,NSE:RAJOIL,NSE:RAJPALAYAM,NSE:RAJRAYON,NSE:RAJSREESUG,NSE:RAJTV,NSE:RAJVIR,NSE:RALLIS,NSE:RAMANEWS,NSE:RAMCOIND,NSE:RAMCOSYS,NSE:RAMKY,NSE:RAMSARUP,NSE:RANASUG,NSE:RANBAXY,NSE:RANEHOLDIN,NSE:RANKLIN,NSE:RASOYPR,NSE:RATNAMANI,NSE:RAYMOND,NSE:RBL,NSE:RBN,NSE:RCF,NSE:RCOM,NSE:RECLTD,NSE:REDINGTON,NSE:REFEX,NSE:REIAGROLTD,NSE:REISIXTEN,NSE:RELAXO,NSE:RELBANK,NSE:RELCAPITAL,NSE:RELGOLD,NSE:RELGRNIFTY,NSE:RELIANCE,NSE:RELIGARE,NSE:RELIGAREGO,NSE:RELINFRA,NSE:RELMEDIA,NSE:REMSONSIND,NSE:RENUKA,NSE:REPRO,NSE:RESPONIND,NSE:REVATHI,NSE:RICOAUTO,NSE:RIIL,NSE:RJL,NSE:RKDL,NSE:RKFORGE,NSE:RMCL,NSE:RML,NSE:ROHITFERRO,NSE:ROHLTD,NSE:ROLTA,NSE:ROMAN,NSE:RPGLIFE,NSE:RPOWER,NSE:RPPINFRA,NSE:RSSOFTWARE,NSE:RSWM,NSE:RSYSTEMS,NSE:RUBYMILLS,NSE:RUCHINFRA,NSE:RUCHIRA,NSE:RUCHISOYA,NSE:RUPA,NSE:RUSHIL,NSE:SABERORGAN,NSE:SABTN,NSE:SADBHAV,NSE:SAGCEM,NSE:SAHPETRO,NSE:SAIL,NSE:SAKHTISUG,NSE:SAKSOFT,NSE:SAKTHIFIN,NSE:SAKUMA,NSE:SALONACOT,NSE:SALORAINTL,NSE:SALSTEEL,NSE:SAMBHAAV,NSE:SAMTEL,NSE:SANDESH,NSE:SANGAMIND,NSE:SANGHIIND,NSE:SANGHVIFOR,NSE:SANGHVIMOV,NSE:SANWARIA,NSE:SARDAEN,NSE:SAREGAMA,NSE:SASKEN,NSE:SATHAISPAT,NSE:SATYAMCOMP,NSE:SAVERA,NSE:SB&TINTL,NSE:SBBJ,NSE:SBIGETS,NSE:SBIN,NSE:SBIN,NSE:SBIN,NSE:SBIN,NSE:SBIN,NSE:SBT,NSE:SCHNEIDER');
$quote = file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:SCI,NSE:SEAMECLTD,NSE:SEINV,NSE:SELAN,NSE:SELMCL,NSE:SERVALL,NSE:SESAGOA,NSE:SESHAPAPER,NSE:SEZAL,NSE:SGJHL,NSE:SHAHALLOYS,NSE:SHAKTIPUMP,NSE:SHALPAINTS,NSE:SHANTIGEAR,NSE:SHARIABEES,NSE:SHARONBIO,NSE:SHASUNPHAR,NSE:SHILPAMED,NSE:SHILPI,NSE:SHIV-VANI,NSE:SHIVAMAUTO,NSE:SHLAKSHMI,NSE:SHOPERSTOP,NSE:SHREEASHTA,NSE:SHREECEM,NSE:SHRENUJ,NSE:SHREYANIND,NSE:SHREYAS,NSE:SHRINATRAJ,NSE:SHRIRAMCIT,NSE:SHRIRAMCIT,NSE:SHRIRAMCIT,NSE:SHRIRAMEPC,NSE:SHYAMTEL,NSE:SICAGEN,NSE:SICAL,NSE:SIEMENS,NSE:SIGNETIND,NSE:SIL,NSE:SILINV,NSE:SIMBHSUGAR,NSE:SIMPLEX,NSE:SIMPLEXINF,NSE:SINTEX,NSE:SIRPAPER,NSE:SITASHREE,NSE:SIYSIL,NSE:SJVN,NSE:SKFINDIA,NSE:SKMEGGPROD,NSE:SKSMICRO,NSE:SKUMARSYNF,NSE:SMARTLINK,NSE:SMLISUZU,NSE:SMOBILITY,NSE:SMPL,NSE:SMSPHARMA,NSE:SOBHA,NSE:SOFTTECHGR,NSE:SOLARINDS,NSE:SOMANYCERA,NSE:SOMATEX,NSE:SONASTEER,NSE:SONATSOFTW,NSE:SOTL,NSE:SOUISPAT,NSE:SOUTHBANK,NSE:SPANCO,NSE:SPARC,NSE:SPECIALITY,NSE:SPECTACLE,NSE:SPENTEX,NSE:SPIC,NSE:SPLIL,NSE:SPMLINFRA,NSE:SPYL,NSE:SREINFRA,NSE:SRF,NSE:SRGINFOTEC,NSE:SRHHLINDST,NSE:SRHHYPOLTD,NSE:SRSLTD,NSE:SRTRANSFIN,NSE:SRTRANSFIN,NSE:SRTRANSFIN,NSE:SRTRANSFIN,NSE:SRTRANSFIN,NSE:SRTRANSFIN,NSE:SRTRANSFIN,NSE:SRTRANSFIN,NSE:SRTRANSFIN,NSE:SSWL,NSE:STAN,NSE:STAR,NSE:STARPAPER,NSE:STCINDIA,NSE:STEL,NSE:STER,NSE:STERLINBIO,NSE:STERTOOLS,NSE:STINDIA,NSE:STOREONE,NSE:STRTECH,NSE:SUBEX,NSE:SUBROS,NSE:SUDAR,NSE:SUDARSCHEM,NSE:SUJANATOW,NSE:SUJANAUNI,NSE:SUMEETINDS,NSE:SUMMITSEC,NSE:SUNCLAYTON,NSE:SUNDARAM,NSE:SUNDARMFIN,NSE:SUNDRMBRAK,NSE:SUNDRMFAST,NSE:SUNFLAG,NSE:SUNILHITEC,NSE:SUNPHARMA,NSE:SUNTECK,NSE:SUNTV,NSE:SUPER,NSE:SUPERSPIN,NSE:SUPPETRO,NSE:SUPRAJIT,NSE:SUPREMEIND,NSE:SUPREMEINF,NSE:SUPREMETEX,NSE:SURAJDIAMN,NSE:SURANACORP,NSE:SURANAIND,NSE:SURANAT&P,NSE:SURANAVEL,NSE:SURYAJYOTI,NSE:SURYALAXMI,NSE:SURYAPHARM,NSE:SURYAROSNI,NSE:SUTLEJTEX,NSE:SUVEN,NSE:SUZLON,NSE:SWANENERGY,NSE:SWARAJENG,NSE:SYMPHONY,NSE:SYNCOM,NSE:SYNDIBANK,NSE:TAINWALCHM,NSE:TAJGVK,NSE:TAKE,NSE:TAKSHEEL,NSE:TALBROAUTO');
$quote = file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:TALWALKARS,NSE:TANLA,NSE:TANTIACONS,NSE:TARAPUR,NSE:TATACAP,NSE:TATACHEM,NSE:TATACOFFEE,NSE:TATACOMM,NSE:TATAELXSI,NSE:TATAGLOBAL,NSE:TATAINVEST,NSE:TATAMETALI,NSE:TATAMOTORS,NSE:TATAMTRDVR,NSE:TATAPOWER,NSE:TATASPONGE,NSE:TATASTEEL,NSE:TBZ,NSE:TCI,NSE:TCIDEVELOP,NSE:TCIFINANCE,NSE:TCS,NSE:TDPOWERSYS,NSE:TECHM,NSE:TECHNO,NSE:TECHNOFAB,NSE:TECPRO,NSE:TELEDATAIT,NSE:TEXINFRA,NSE:TEXMOPIPES,NSE:TEXRAIL,NSE:TFCILTD,NSE:TFL,NSE:THANGAMAYL,NSE:THEBYKE,NSE:THEMISMED,NSE:THERMAX,NSE:THINKSOFT,NSE:THIRUSUGAR,NSE:THOMASCOOK,NSE:THOMASCOTT,NSE:TI,NSE:TIDEWATER,NSE:TIIL,NSE:TIJARIA,NSE:TIL,NSE:TIMBOR,NSE:TIMESGTY,NSE:TIMETECHNO,NSE:TIMKEN,NSE:TINPLATE,NSE:TIPSINDLTD,NSE:TIRUMALCHM,NSE:TITAN,NSE:TNPETRO,NSE:TNPL,NSE:TODAYS,NSE:TOKYOPLAST,NSE:TORNTPHARM,NSE:TORNTPOWER,NSE:TREEHOUSE,NSE:TRENT,NSE:TRENT,NSE:TRF,NSE:TRICOM,NSE:TRIDENT,NSE:TRIGYN,NSE:TRIL,NSE:TRITURBINE,NSE:TRIVENI,NSE:TTKHEALTH,NSE:TTKPRESTIG,NSE:TTL,NSE:TTML,NSE:TUBEINVEST,NSE:TULIP,NSE:TULSI,NSE:TULSYAN,NSE:TV18BRDCST,NSE:TVSELECT,NSE:TVSMOTOR,NSE:TVSSRICHAK,NSE:TVTODAY,NSE:TWILITAKA,NSE:TWL,NSE:UBENGG,NSE:UBHOLDINGS,NSE:UBL,NSE:UCALFUEL,NSE:UCOBANK,NSE:UFLEX,NSE:UGARSUGAR,NSE:ULTRACEMCO,NSE:UMESLTD,NSE:UNICHEMLAB,NSE:UNIENTER,NSE:UNIONBANK,NSE:UNIPHOS,NSE:UNIPLY,NSE:UNITECH,NSE:UNITEDBNK,NSE:UNITY,NSE:UPERGANGES,NSE:USHAMART,NSE:USHERAGRO,NSE:UTTAMSTL,NSE:UTTAMSUGAR,NSE:V2RETAIL,NSE:VADILALIND,NSE:VAIBHAVGEM,NSE:VAKRANSOFT,NSE:VALECHAENG,NSE:VALUEIND,NSE:VARDHACRLC,NSE:VARDMNPOLY,NSE:VARUN,NSE:VARUNSHIP,NSE:VASCONEQ,NSE:VASWANI,NSE:VENKEYS,NSE:VENUSREM,NSE:VESUVIUS,NSE:VGUARD,NSE:VHL,NSE:VICEROY,NSE:VIDEOIND,NSE:VIJAYABANK,NSE:VIJSHAN,NSE:VIKASGLOB,NSE:VIKASHMET,NSE:VIMTALABS,NSE:VINATIORGA,NSE:VINDHYATEL,NSE:VINYLINDIA,NSE:VIPIND,NSE:VIPUL,NSE:VISAKAIND,NSE:VISASTEEL,NSE:VISESHINFO,NSE:VISUINTL,NSE:VIVIMEDLAB,NSE:VLSFINANCE,NSE:VOLTAMP,NSE:VOLTAS,NSE:VSSL,NSE:VSTIND,NSE:VSTTILLERS,NSE:VTL,NSE:VTMLTD,NSE:VTXIND');
 $quote = file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:WABAG,NSE:WABCOINDIA,NSE:WALCHANNAG,NSE:WANBURY,NSE:WEBELSOLAR,NSE:WEIZFOREX,NSE:WELCORP,NSE:WELGLOB,NSE:WELINV,NSE:WELPROJ,NSE:WELSPUNIND,NSE:WENDT,NSE:WHEELS,NSE:WHIRLPOOL,NSE:WILLAMAGOR,NSE:WINDMACHIN,NSE:WINSOME,NSE:WIPRO,NSE:WOCKPHARMA,NSE:WSI,NSE:WSTCSTPAPR,NSE:WWIL,NSE:WYETH,NSE:XLENERGY,NSE:XPROINDIA,NSE:YESBANK,NSE:ZANDUREALT,NSE:ZEEL,NSE:ZEELEARN,NSE:ZEENEWS,NSE:ZENITHBIR,NSE:ZENITHCOMP,NSE:ZENSARTECH,NSE:ZICOM,NSE:ZODIACLOTH,NSE:ZODJRDMKJ,NSE:ZUARIAGRO,NSE:ZYDUSWELL,NSE:ZYLOG');

  $parts = explode('"', $quote);

$a = 7;
$b = 15;

for ($i = 0; $i <=1539; $i++ ) {

$name = $parts[$a];
$ltp = str_replace(",","",$parts[$b]);
$a = $a + 44;
$b = $b + 44;
$datafile = $name."LAST.txt";
$file = fopen($datafile, "w" );
fwrite( $file, $ltp ); 
fclose( $file );

}

 

$End = getTime();
$much = number_format(($End - $Start),2);
$jiu = file_get_contents("looplimit.txt");
if( $ft == $jiu ) { $ft--; };
$mk ++;
$file = fopen("biglooplog.txt", "a+" );
fwrite( $file, $mk."th - stream in -".$much." seconds."."\r\n" ); 
fclose( $file );

}


?>
/*email to provide support at vancekingsaxbe@powerdominionenterprise.com, businessaffairs@powerdominionenterprise.com, For donations please write to fundraising@powerdominionenterprise.com*/
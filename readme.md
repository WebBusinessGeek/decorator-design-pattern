Decorator design pattern play classes

interface BeverageInterface
getDescription()
setDescription()
getSize()
setSize()
getPrice()
setPrice()
cost()

class Beverage implements BeverageInterface
use BeverageAttributeTrait, SizeAbleTrait;
__construct(‘stringForDescription’){//setDescription/Price/SizeSheets)

class AddOn implements BeverageInterface
use BeverageAbleTrait
$beverage;
__construct(’stringForDescription’, BeverageInterface $beverage){//setDescription/PriceSheets)

class DescriptionSheet implements DescriptionSheetContract

class SizeSheet implements SizeSheetContract

class PriceSheet implements PriceSheetContract

interface SizeSheetContract
findSize()

interface PriceSheetContract
findPrice()

interface DescriptionSheetContract
findDescription()

BeverageAbleTrait
$descriptionSheet  = new DescriptionSheetContract;
$priceSheet = new PriceSheetContract;
$price;
$size;
$description;

SizeAbleTrait
$sizeSheet = new SizeSheetContract

class Bindings
//register domain bindings
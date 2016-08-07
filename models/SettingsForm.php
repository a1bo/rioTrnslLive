<?

use yii\helpers\Html;
use yii\widgets\ActiveForm;
namespace app\models;
class SettingsForm extends \dektrium\user\models\SettingsForm
{
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        // add field to scenarios
        $scenarios['create'][]   = ['dst','src'];
        $scenarios['update'][]   = ['dst','src'];
        $scenarios['register'][] = ['dst','src'];
        return $scenarios;
    }

    public function rules()
    {
        $rules = parent::rules();
        $rules['fieldRequired'] = [['dst','src'], 'required'];

        $rules['fieldLength']   = [['dst','src'], 'string', 'max' => 10];
        return $rules;
    }
}
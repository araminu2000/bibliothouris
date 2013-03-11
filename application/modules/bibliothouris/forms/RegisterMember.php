<?php
class Bibliothouris_Form_RegisterMember extends Zend_Form {

    public function init() {

        $this->setAttribs(array('class' => 'form block-labels', 'id' => 'registerForm'))
            ->setMethod('post');

        $element = new Zend_Form_Element_Text('fname');
        $element->setLabel('First Name')
            ->setAttrib('class', 'fieldsClass')
            ->setAttrib('maxlength', 50)
            ->setRequired(true)
            ->setValidators(array(
                array(
                    'validator' => 'StringLength',
                    'options' => array(1, 50),

                )
            ));
        $this->addElement($element);

        $element = new Zend_Form_Element_Text('lname');
        $element->setLabel('Last Name')
            ->setAttrib('class', 'fieldsClass')
            ->setAttrib('maxlength', 50)
            ->setRequired(true)
            ->setValidators(array(
                array(
                    'validator' => 'StringLength',
                    'options' => array(1, 50),

                )
            ));
        $this->addElement($element);

        $element = new Zend_Form_Element_Text('email');
        $element->setLabel('Email')
            ->setAttrib('class', 'fieldsClass')
            ->setAttrib('maxlength', 50)
            ->setRequired(true)
            ->setValidators(array(
                    array(
                        'validator' => 'EmailAddress',
                    )
                ))
            ->addValidator(new Bibliothouris_Validate_EmailAddressUnique());
        $this->addElement($element);

        $element = new Zend_Form_Element_Password('password');
        $element->setLabel('Password')
            ->setAttrib('class', 'fieldsClass')
            ->setAttrib('maxlength', 50)
            ->setRequired(true)
            ->setValidators(array(
                array(
                    'validator' => 'StringLength',
                    'options' => array(6, 32),

                )
            ));
        $this->addElement($element);

        $element = new Zend_Form_Element_Submit('registerMemberSbt');
        $element->setLabel('Register')
            ->setAttrib('class', 'buttons');
        $this->addElement($element);

        $element = new Zend_Form_Element_Reset('registerMemberCancel');
        $element->setLabel('Cancel')
            ->setAttrib('class', 'buttons')
            ->setAttrib('onclick', 'location.href=\'/bibliothouris/members/index\'');;
        $this->addElement($element);
    }
}

class Bibliothouris_Validate_EmailAddressUnique extends Zend_Validate_Abstract {

    const USED = 'used';

    protected $_messageTemplates = array(
        self::USED => "Email address is already taken."
    );

    public function isValid($value, $context = null) {
        $membersMapper = new Bibliothouris_Model_MembersMapper();
        $memberCount = $membersMapper->countByQuery('email=\''.mysql_real_escape_string($value).'\'');

        if($memberCount > 0){
            $this->_error(self::USED);
            return false;
        }

        return true;
    }

}
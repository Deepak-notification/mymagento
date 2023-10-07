<?php
namespace Magento\AdminAdobeIms\Model\ResourceModel\User;

/**
 * Interceptor class for @see \Magento\AdminAdobeIms\Model\ResourceModel\User
 */
class Interceptor extends \Magento\AdminAdobeIms\Model\ResourceModel\User implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Authorization\Model\RoleFactory $roleFactory, \Magento\Framework\Stdlib\DateTime $dateTime, $connectionName = null, ?\Magento\Framework\Acl\Data\CacheInterface $aclDataCache = null, ?\Magento\User\Model\Backend\Config\ObserverConfig $observerConfig = null, ?\Magento\Framework\Encryption\EncryptorInterface $encryptor = null)
    {
        $this->___init();
        parent::__construct($context, $roleFactory, $dateTime, $connectionName, $aclDataCache, $observerConfig, $encryptor);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Framework\Model\AbstractModel $user)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($user);
    }
}

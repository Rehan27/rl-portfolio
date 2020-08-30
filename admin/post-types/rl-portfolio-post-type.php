<?php
require_once (RL_PORTFOLIO_PATH . 'admin/post-types/PortfolioCpt.php');
require_once (RL_PORTFOLIO_PATH . 'admin/post-types/PortfolioCptTax.php');
require_once (RL_PORTFOLIO_PATH . 'admin/post-types/PortfolioMetaBox.php');

new PortfolioCpt('project', 'projects');
new PortfolioCptTax('project category', 'project categories', 'project', 'project');
new PortfolioMeta('_rl_portfolio_gallery','project');
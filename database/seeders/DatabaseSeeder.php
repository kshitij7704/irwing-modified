<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
            smartAiWorkforce::class,
            AboutCompanySeeder::class,
            AcademySeeder::class,
            AgenticAiUseCaseSeeder::class,
            AIAgentCoPilotTalkSeriesSeeder::class,
            AIAgentsforSalesMarketingSeeder::class,
            AiAvatarVidhiraSeeder::class,
            AiLifeBotPlatformSeeder::class,
            AIMultiAgentsSeeder::class,
            AiVoiceAgentsSeeder::class,
            AiCustomerServiceSeeder::class,
            AnalyticsAndReportingSeeder::class,
            AutomotiveAiAgentsSeeder::class,
            AviationLogisticsAiAgentsServiceSeeder::class,
            BankingFinancialAiAgentsServiceSeeder::class,
            BlogsSeeder::class,
            CareersPageSeeder::class,
            CaseStudiesSeeder::class,
            CompanyLeadershipSeeder::class,
            ContactCenterAgentServiceSeeder::class,
            ContactPageSeeder::class,
            CustomerServiceAiAgentsSeeder::class,
            CustomerSuccessStoriesSeeder::class,
            EducationAiAgentsSeeder::class,
            EmployeeOnboardingAiSeeder::class,
            EnterpriseIntegrationsSeeder::class,
            EnterpriseKnowledgeManagementSeeder::class,
            FinanceAiSeeder::class,
            HealthcareAiAgentsServiceSeeder::class,
            HelpdeskInsightsSeeder::class,
            HrSupportAgenticAiSeeder::class,
            InsuranceAiAgentsServiceSeeder::class,
            ITKnowledgeManagementSeeder::class,
            ItSupportAgenticAiSeeder::class,
            ItSupportAutomationSeeder::class,
            LiveChatAgentSeeder::class,
            ManufacturingAiAgentsServiceSeeder::class,
            MultimodalAISeeder::class,
            PartnerProgramSeeder::class,
            ProcurementSupportAiSeeder::class,
            PublicServicesAiAgentsSeeder::class,
            SalesMarketingAiAgentsSeeder::class,
            SalesSupportAiSeeder::class,
            TravelAiAgentsSeeder::class,
            TechnicalDocumentationSeeder::class,
            VernacularAiSeeder::class,
            VoiceAgentServiceSeeder::class,
            AiCustomerServiceSeeder::class,
	        CustomerServiceAiAgentsSeeder::class,
            RetailAiAgentsServiceSeeder::class,
            AiLifeBotIntegrationsSeeder::class,
            GallerySeeder::class,
            BlogSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
            RolePermissionSeeder::class,
            AdminUserSeeder::class,
        ]);
    }
}
